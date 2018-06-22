/*
 * jsImageBox - slim and simple image modal viewer for webpages http://www.jsimagebox.ru
 * Copyright (C) 2008 c0rr, p_ann 
 * 
 * Licensed under the terms of GNU General Public License Version 2 or later (the "GPL")
 *    http://www.gnu.org/licenses/gpl.html
 */
var jsiBox = {
	boxBorderColor : '#FFFFFF',
	boxBorderWidth : '0',
	boxBgColor     : '#000',
	imgBgColor     : '#808080', 
	overlayColor   : '#000',
	nextArrow      : '&rarr;',
	prevArrow      : '&larr;',
	closeSymbol    : '&times;',
	statusString   : 'Фото&nbsp;[num]&nbsp;из&nbsp;[total]',
	selfDir        : ''
};
function jsiBoxInit() {
    if (jsiBox.selfDir == '') {
        var scriptNodes = document.getElementsByTagName('script');
        for (var i = 0; i < scriptNodes.length; i++) {
            if (scriptNodes[i].src && scriptNodes[i].src.match('jsibox_basic.js')) {
                jsiBox.selfDir = scriptNodes[i].src.split('jsibox_basic.js')[0];
                break
            }
        }
    }
    var boxHTML = '<style type="text/css">#jsiMainBox * {margin: 0; padding: 0; border: 0; text-decoration: none;} #jsiMainBox a.jsiBtn {outline: none; float:right; color: #fff; font-size: 30px;  vertical-align:middle;font-weight:normal; } </style>' + '<div id="wrapJsiBox" style="position: absolute; top:0; left:0; display: none; z-index: 3000; background-color:' + jsiBox.overlayColor + '; opacity: 0.6; filter: alpha(opacity=\'60\');"></div>' + '<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3001;">' + '  <div id="jsiMainBox" style="color: #fff;text-align:left;position: relative; display: none;margin: auto;z-index: 2;width: 400px; background:' + jsiBox.boxBgColor + '; border: ' + jsiBox.boxBorderWidth + ' solid ' + jsiBox.boxBorderColor + '; padding-bottom: 2px;">' + '  <p style="text-align: right; font: bold 10px Tahoma; padding-top: 0;width:100%;overflow:hidden;padding-bottom:0;">' + '  <img src="' + jsiBox.selfDir + 'img/ajax-loader2.gif" alt="" id="jsiBoxLoading" style="float:left; display:inline; margin:7px 5px 0 8px;" />' + ' <a href="#" style="padding:0 20px 0 0;width:28px;line-height:32px;" onclick="return jsiBoxClose();" class="jsiBtn">' + jsiBox.closeSymbol + '</a>' + ' <span style="width: 100px; float: left; position:relative; margin: 0 0 0 20px;">' + ' <a href="#" id="nextJsiBoxLink" onclick="return jsiBoxNext();" style="position:absolute;top: 0;right: 0;line-height:30px;" class="jsiBtn">' + jsiBox.nextArrow + '</a>' + ' <a href="#" id="prevJsiBoxLink" onclick="return jsiBoxPrev();" style="position:absolute;top: 0;left: 0;line-height:30px;" class="jsiBtn">' + jsiBox.prevArrow + '</a>' + '  </span>' + ' </p>' + ' <p id="jsiBoxNumberOfImage" style="margin: 0 20px;color: #808080;text-align: center;"></p>' + ' <div id="jsiBoxMainImageWrap" style="background:' + jsiBox.imgBgColor + '; margin: 0 20px 20px 20px; overflow: hidden; position: relative;">' + ' <img src="' + jsiBox.selfDir + 'img/blank.gif" id="jsiBoxMainImage" alt="" style="display: block;" />' + ' </div>' + ' <span id="jsiBoxTitle" style="margin:0 8px; font: normal 12px;"> </span>' + ' </div>' + '</div>';
    jsiBox.wrapNode = document.getElementById('wrapJsiBox');
    if (!jsiBox.wrapNode) {
        document.write(boxHTML)
    }
    jsiBox.preloadImg = new Image();
    jsiBox.preloadImg.onload = jsiBoxDisplayMainImg;
    jsiBox.wrapNode = document.getElementById('wrapJsiBox');
    jsiBox.boxNode = document.getElementById('jsiMainBox');
    jsiBox.progressImg = document.getElementById('jsiBoxLoading');
    jsiBox.prevLinkNode = document.getElementById('prevJsiBoxLink');
    jsiBox.nextLinkNode = document.getElementById('nextJsiBoxLink');
    jsiBox.infoNode = document.getElementById('jsiBoxNumberOfImage');
    jsiBox.wrapImgNode = document.getElementById('jsiBoxMainImageWrap');
    jsiBox.mainImg = document.getElementById('jsiBoxMainImage');
    jsiBox.titleNode = document.getElementById('jsiBoxTitle');
    jsiBox.currentImgIndex = 0;
    jsiBox.linkNodesArray = new Array()
}
function jsiBoxDisplayMainImg() {
    var previousImgIndex = jsiBox.currentImgIndex - 1;
    if (previousImgIndex >= 0) {
        jsiBox.prevLinkNode.style.display = ''
    } else {
        jsiBox.prevLinkNode.style.display = 'none'
    }
    var nextImgIndex = jsiBox.currentImgIndex + 1;
    if (nextImgIndex < jsiBox.linkNodesArray.length) {
        jsiBox.nextLinkNode.style.display = ''
    } else {
        jsiBox.nextLinkNode.style.display = 'none'
    }
    if (jsiBox.linkNodesArray.length > 1) {
        var info = jsiBox.statusString.replace('[num]', jsiBox.currentImgIndex + 1);
        info = info.replace('[total]', jsiBox.linkNodesArray.length);
        jsiBox.infoNode.innerHTML = info
    }
    jsiBoxDimMainImage(10);
    jsiBox.progressImg.style.display = 'none';
    jsiBox.titleNode.innerHTML = '';
    jsiBox.titleNode.style.display = 'none'
}
function jsiBoxDimMainImage(opacity) {
    var newOpacity;
    if (opacity) {
        newOpacity = opacity
    } else {
        var step = 2;
        newOpacity = jsiBox.mainImg.style.opacity * 10 - step
    }
    jsiBox.mainImg.style.opacity = newOpacity / 10;
    jsiBox.mainImg.style.filter = 'alpha(opacity=' + newOpacity * 10 + ')';
    if (jsiBox.mainImg.style.opacity > 0) {
        setTimeout('jsiBoxDimMainImage()', 35)
    } else {
        jsiBox.mainImg.style.display = 'none';
        jsiBox.mainImg.style.opacity = 0;
        jsiBox.mainImg.style.filter = 'alpha(opacity=100)';
        jsiBoxResize()
    }
}
function jsiBoxResize() {
    var leftInnerMargin = parseInt(jsiBox.wrapImgNode.style.marginLeft, 10) || 0;
    var rightInnerMargin = parseInt(jsiBox.wrapImgNode.style.marginRight, 10) || 0;
    var leftBorder = parseInt(jsiBox.boxNode.style.borderLeftWidth, 10) || 0;
    var rightBorder = parseInt(jsiBox.boxNode.style.borderRightWidth, 10) || 0;
    var deltaWidth = jsiBox.wrapImgNode.offsetWidth - jsiBox.preloadImg.width;
    var deltaHeight = jsiBox.wrapImgNode.offsetHeight - jsiBox.preloadImg.height;
    var widthResizeStep = deltaWidth / 4;
    var heightResizeStep = deltaHeight / 4;
    widthResizeStep = (widthResizeStep > 0) ? Math.ceil(widthResizeStep) : Math.floor(widthResizeStep);
    heightResizeStep = (heightResizeStep > 0) ? Math.ceil(heightResizeStep) : Math.floor(heightResizeStep);
    if (Math.abs(deltaWidth) > Math.abs(widthResizeStep)) {
        var newWidth = jsiBox.boxNode.offsetWidth - leftBorder - rightBorder - widthResizeStep;
        jsiBox.boxNode.style.width = newWidth + 'px'
    }
    if (Math.abs(deltaHeight) > Math.abs(heightResizeStep)) {
        var newHeight = jsiBox.wrapImgNode.offsetHeight - heightResizeStep;
        jsiBox.wrapImgNode.style.height = newHeight + 'px'
    }
    if ((Math.abs(deltaHeight) > Math.abs(heightResizeStep)) || (Math.abs(deltaWidth) > Math.abs(widthResizeStep))) {
        setTimeout('jsiBoxResize()', 35)
    } else {
        jsiBox.boxNode.style.width = jsiBox.preloadImg.width + leftInnerMargin + rightInnerMargin + 'px';
        jsiBox.mainImg.style.width = jsiBox.preloadImg.width + 'px';
        jsiBox.wrapImgNode.style.height = jsiBox.preloadImg.height + 'px';
        jsiBox.mainImg.src = jsiBox.preloadImg.src;
        jsiBox.mainImg.style.display = 'block';
        var imageTitle = (jsiBox.linkNodesArray[jsiBox.currentImgIndex]) ? jsiBox.linkNodesArray[jsiBox.currentImgIndex].title : '';
        if (imageTitle != '') {
            jsiBox.titleNode.style.display = 'block';
            jsiBox.titleNode.innerHTML = imageTitle
        }
        jsiBoxLightenMainImage()
    }
}
function jsiBoxLightenMainImage() {
    var step = 2;
    var newOpacity = jsiBox.mainImg.style.opacity * 10 + step;
    jsiBox.mainImg.style.opacity = newOpacity / 10;
    jsiBox.mainImg.style.filter = 'alpha(opacity=' + newOpacity * 10 + ')';
    if (jsiBox.mainImg.style.opacity < 1) {
        setTimeout('jsiBoxLightenMainImage()', 35)
    } else {
        jsiBox.mainImg.style.opacity = '';
        jsiBox.mainImg.style.filter = ''
    }
}
function jsiBoxNext() {
    jsiBox.progressImg.style.display = 'block';
    var nextImgIndex = jsiBox.currentImgIndex + 1;
    if (nextImgIndex < jsiBox.linkNodesArray.length) {
        jsiBox.currentImgIndex = nextImgIndex;
        jsiBox.preloadImg.src = jsiBox.linkNodesArray[nextImgIndex].href
    }
    return false
}
function jsiBoxPrev() {
    jsiBox.progressImg.style.display = 'block';
    var prevImgIndex = jsiBox.currentImgIndex - 1;
    if (prevImgIndex >= 0) {
        jsiBox.currentImgIndex = prevImgIndex;
        jsiBox.preloadImg.src = jsiBox.linkNodesArray[prevImgIndex].href
    }
    return false
}
function jsiBoxClose() {
    jsiBox.wrapNode.style.display = 'none';
    jsiBox.boxNode.style.display = 'none';
    return false
}
function jsiBoxOpen(domNode) {
    var docLinks = document.getElementsByTagName('a');
    jsiBox.progressImg.style.display = 'block';
    jsiBox.linkNodesArray = new Array();
    if (domNode.rel != '') {
        for (var i = 0; i < docLinks.length; i++) {
            if (docLinks[i].rel == domNode.rel) {
                jsiBox.linkNodesArray.push(docLinks[i])
            }
            if (docLinks[i] == domNode) {
                jsiBox.currentImgIndex = jsiBox.linkNodesArray.length - 1
            }
        }
    } else {
        jsiBox.linkNodesArray.push(domNode);
        jsiBox.currentImgIndex = 0
    }
    jsiBox.infoNode.innerHTML = '&#160;';
    jsiBox.titleNode.innerHTML = '';
    var pagesize = getPageSizeWithScroll();
    jsiBox.wrapNode.style.display = 'block';
    jsiBox.wrapNode.style.height = pagesize[1] + 'px';
    jsiBox.wrapNode.style.width = pagesize[0] + 'px';
    var top = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;
    jsiBox.boxNode.style.top = (top + 200) + 'px';
    jsiBox.mainImg.src = jsiBox.selfDir + 'img/blank.gif';
    jsiBox.wrapImgNode.style.height = '30px';
    jsiBox.boxNode.style.width = '200px';
    jsiBox.boxNode.style.display = 'block';
    jsiBox.preloadImg.src = domNode.href;
    return false
}
function getPageSizeWithScroll() {
    if (window.innerHeight && window.scrollMaxY) {
        pageWidth = document.body.clientWidth + window.scrollMaxX;
        pageHeight = window.innerHeight + window.scrollMaxY
    } else if (document.body.scrollHeight > document.body.offsetHeight) {
        pageWidth = document.body.scrollWidth;
        pageHeight = document.body.scrollHeight
    } else {
        pageWidth = document.body.offsetWidth + document.body.offsetLeft;
        pageHeight = document.body.offsetHeight + document.body.offsetTop
    }
    arrayPageSizeWithScroll = new Array(pageWidth, pageHeight);
    return arrayPageSizeWithScroll
}
jsiBoxInit();
