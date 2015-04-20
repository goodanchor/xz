/**
 * Created by Ganother on 2015/4/18.
 */
$(document).ready(function(){
    var img={};
    img.big=$(".product .big");
    img.small=$(".product .small");
    img.small.each(function(index){
        var n=index;
        $(this).on("mouseenter",function(){
            img.small.removeClass("active");
            $(this).addClass("active");
            img.big.hide().eq(n).show();
        });
    });

    var collectBtn=$(".collect .btn");
    function changeCollectState(){
        var collectS=collectBtn.attr("data-collect");
        if(collectS==="true"){
            collectBtn.removeClass("red-btn").addClass("red-bac")
                .find(".collect-bac").removeClass("collecting").addClass("collected");

        }
    }

    changeCollectState();

    collectBtn.on("click",function(){
        if($(this).attr("data-collect")==="false"){
            //�ղ���Ʒajax����ʵ�ʵ�ַ�滻url������ֵΪ�ַ���true(�ղسɹ�) or false(�ղ�ʧ��)
            $.post("url",{tocellect:1},function(result){
                if(result===true){
                    collectBtn.attr("data-collect","true");
                    changeCollectState();
                }else{
                    alert("�ղ�ʧ�������ԣ�")
                };
            });
        }
    });
    $("#uploadify").uploadify({
        'buttonCursor':'hand',
        'height':'120',
        'width':'160',
        'buttonText':'+',
        'uploader': 'uploadify.swf',
        //�����һ����ַ
        'script': 'UploadHandler.ashx',
        'cancelImg': 'js/uploadify-cancel.png',
        'folder': 'UploadFile',
        'queueID': 'fileQueue',
        'auto': false,
        'multi': true
    });
});