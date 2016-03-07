/* ***************************************
name: advertisementSwitch
import: jquery1.4
***************************************** */
var effectPage = function (slider, options) {
    // �����
    
    this.list = jQuery(slider); // �б�
	this.slider = this.list.parent(); // ����
    this.count = this.list.size(); // �ϼ�
    this.index = 0; //����
    this.prevIndex = 0; // ��һ����
    this.timer = null; // ��ʱ��
	this.allowShow = true; // �л�Ƶ����ʾ
	this.playType  = "Next"; // ��������


    // ѡ��
    this.options = {//Ĭ��ֵ
        Auto: true, //�Ƿ��Զ�
        Duration: 800, //����ʱ��
        Time: 1000, //��ʱ
        Pause: 3000, //ͣ��ʱ��(AutoΪtrueʱ��Ч),
        effect: "", //����Ч��
        pageBind: "", // �л���
		lazyLoad: false, // �ӳټ���
		useMousePage: false, // ʹ���������ҳ
        pageSelectClass: "" //ѡ����ʽ
    };

   

    jQuery.extend(this.options, options || {});
    //Ч��������
    this.effectName = this.options.effect; //Ч����   
	if ( !this.options.autoSize) {// ��������ӦͼƬ��С
		if ( this.options.useMousePage ) this.useMousePage();     //��귭ҳ
	};
	if ( this.options.keyboardPage ) this.useKeyboardPage();   //���̷�ҳ
};

effectPage.prototype = {
    PlayEffect: function () { // Ч���л�
        switch (this.effectName) {
            case "fade":
                this.fadeInOut();
                break; 
            default:
                this.InOut();
                break;
        };
    },
    InOut: function () {//Ĭ��
        var index = this.index;
        if (this.list.length > 0 && index != this.prevIndex) {
            jQuery(this.list[index]).css({ "z-index": "1" }).show();
            jQuery(this.list[this.prevIndex]).css({ "z-index": "0" }).hide();
        }
    },
    fadeInOut: function () {//���뵭��
        var index = this.index;
        if (this.list.length > 0 && index != this.prevIndex) {
            jQuery(this.list[index]).css({ "z-index": "1" }).fadeIn(this.options.Duration);
            jQuery(this.list[this.prevIndex]).css({ "z-index": "0" }).fadeOut(this.options.Duration); ;
        }
    },
    PageStyleSwitch: function () {
        var index = this.index;
        if (this.options.pageSelectClass.length > 0) {
            var pageList = jQuery("#" + this.options.pageBind).children();
            jQuery(pageList[this.index]).addClass(this.options.pageSelectClass);
            if (this.index != this.prevIndex) jQuery(pageList[this.prevIndex]).removeClass(this.options.pageSelectClass);  
        }
    },
    // �̳а�
    Bind: function (object, fun) {
        var args = Array.prototype.slice.call(arguments).slice(2);
        return function () {
            return fun.apply(object, args.concat(Array.prototype.slice.call(arguments)));
        };
    },
	// ʹ���������ҳ
	useMousePage: function(){
		var that = this;
		// ��ȡ�������߶�/���
		var parentWidth  = this.slider.width(), 
			parentHeight = this.slider.height();
		var divStyle = "position: absolute; display: block; opacity: 0; filter: Alpha(opacity=0)\9; top: 0; background: #ffffff; z-index: 9;"
		             + "width: " + parentWidth/2 + "px;" + "height: " + parentHeight + "px;";
					 

		// ������ת����
		var leftDiv = document.createElement("DIV");
		leftDiv.style.cssText = divStyle + "left: 0";
		leftDiv.onclick =  function(){
			that.Prev();
		};
		this.slider.append(leftDiv);

		var rightDiv = document.createElement("DIV");
		rightDiv.style.cssText = divStyle + "left: " + parentWidth/2 + "px;";
		rightDiv.onclick = function(){
			that.Next();
		};
		this.slider.append(rightDiv);
	},
	// ʹ�ü��̷�ҳ
	useKeyboardPage: function(){
		var keyControl = this.options.keyboardPage || "",  keyString = ["updown","leftright"], that = this;
		keyControl = keyControl.toString().toLocaleLowerCase();
		if (keyControl.length === 0 || jQuery.inArray(keyControl, keyString) < 0) return;
		
		jQuery(document).keydown(function(e){
			var keyCode = keyControl === "updown" ? [38, 40] : [37, 39];
			if (e.keyCode === keyCode[0]) that.Prev();
			if (e.keyCode === keyCode[1]) that.Next();
		});

	},
	// Ƶ�ʿ���
	switchSpeed: function(){
		clearTimeout(this.allowShowTimer);
		this.allowShowTimer = null;
		this.allowShow = true;
		this.Run(this.index);
	},
	// ����ͼƬ
	LoadImage: function( imgUrl, index ){
		var that = this,
			imgNew = new Image(),
			imgControl = that.list[index];
		imgControl.removeAttribute("lazysrc");
		imgNew.src	   	 = imgUrl;
		imgNew.index     = index;
		imgControl.src   = imgUrl;
		imgNew.onload = function () {
			that.Play(imgNew.index);
			that.allowShow = true;
			imgNew.onload = null;
			jQuery(".loading").css({"display": "none"});
		};
	},
    // ���ñ���
    Run: function (index, t) {
    	this.playType = t;
        clearTimeout(this.timer);
        //����index
        index == undefined && (index = this.index);
        index < 0 && (index = this.count - 1) || index >= this.count && (index = 0);
        this.index = index;
		var imgControl = this.list[index],
			imgUrl     = imgControl.getAttribute("lazysrc");

		if ( this.options.lazyLoad ){
			if (imgUrl){
				// �����л�Ƶ��
				if(!this.allowShow) return;
				jQuery(".loading").css({"display": "block"});
				this.allowShow = false;
				this.LoadImage(imgUrl, index);
				
			}else{
				this.Play(index);	
			};

		}else{
			this.Play(index); //����
		};
		
    },
	// Play
	Play: function (index){
		// ++pv
		// this.cnzzCount();
		this.index = index;
		this.PlayEffect(); //�л�����Ч��
        this.PageStyleSwitch(); //ѡ����ʽ�л�
        this.prevIndex = index;
        // �ⲿ��ҳ�����¼�
        if (this.options.flipPage) this.options.flipPage(index, this.playType);
        // �Զ�����
        this.options.Auto && (this.timer = setTimeout(this.Bind(this, this.Next), this.options.Pause));
	},
	// cnzz count
	// cnzzCount: function(){
	// 	var imgV    = jQuery("img[src*='cnzz.com']"),
	// 		imgN    = document.createElement("IMG");
	// 	imgN.width  = 0;
	// 	imgN.height = 0;
	// 	imgN.border = 0;
	// 	imgN.src    = imgV.attr("src");
	// 	//delete
	// 	imgV.remove();
	// 	//create
	// 	document.body.appendChild(imgN);

	// },
	First: function (){ this.Run(0, "First"); },
	End : function () { this.Run(this.count-1, "End"); },
    Next: function () { this.Run(++this.index, "Next");  },
    Prev: function () { this.Run(--this.index, "Prev"); },
    Stop: function () { }
};

