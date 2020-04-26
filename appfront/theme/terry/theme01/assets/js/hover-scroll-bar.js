
$(function() {
    // 悬浮窗口
    $(".yb_conct").hover(function() {
        $(".yb_conct").css("right", "5px");
        $(".yb_bar .yb_ercode").css('height', '200px');
    }, function() {
        $(".yb_conct").css("right", "-127px");
        $(".yb_bar .yb_ercode").css('height', '53px');
    });
    // 返回顶部
    $("#customizedGoToTop").click(function(){
        $("html,body").animate({scrollTop:0},"slow");
    });
});
