var total_page = 3;
var current_page = 1;
var keywords = [];
var starting_viewers = 0;
var amount_views = 0;
var viewers_price = 0;
var views_price = 0;
var user_fund = 0;
var service_id = 1;
var category_id = 1;
var exact_price = 0;
var exact_amount = 0;
var total_price = 0;
var viewers_order_id = 0;
var views_order_id = 0;
var campaign_id = 0;
var url_filter = ["facebook.com","Facebook.com"];
var viewers_price_list = {
    "30":{
        "100":25,
        "200":40,
        "300":55,
        "400":70,
        "500":85.00,
        "600":100.00,
        "700":125.00,
        "800":140.00,
        "900":155.00,
        "1000":170.00,
    },
    "60":{
        "100":30,
        "200":50,
        "300":65,
        "400":80,
        "500":95.00,
        "600":115.00,
        "700":135.00,
        "800":155.00,
        "900":170.00,
        "1000":185.00,
    },
    "120":{
        "100":55,
        "200":70,
        "300":85,
        "400":100,
        "500":115.00,
        "600":125.00,
        "700":155.00,
        "800":175.00,
        "900":195.00,
        "1000":220.00,
    }
};
var StepOneValidate = function(){
    if($("#share_link").val() == ""){
        ShowNotice("warning","Warning","Please input Link to Share");
        $("#share_link").focus();
        return false;
    }
    if(!url_filter_result($("#share_link").val())){
        ShowNotice("warning","Warning","Sorry only Facebook Feed/Broadcast links are allowed.");
        $("#share_link").focus();
        $("#share_link").select();
        return false;
    }
    var cnt = 0;
    $(".main-pane").find("input[type=checkbox]").each(function(){
        if($(this).prop("checked") == true)cnt+=1;
    })
    if(cnt == 0){
        ShowNotice("warning","Warning","Please select Pages And Groups to share to");
        return false;
    }
    return true;
}
var StepTwoValidate = function(){
    if(keywords.length == 0){
        ShowNotice("warning","Warning","Please add at least one keyword.");
        $("#keyword_input").focus();
        return false;
    }
    if(category_id == 1){
        exact_price = viewers_price;
        exact_amount = starting_viewers;
    }
    if(category_id == 2){
        exact_price = views_price;
        exact_amount = amount_views;
    }
    if(starting_viewers == 0){
        ShowNotice("warning","Warning","Please input Live viewers amount.");
        $('#liveviewers_input').focus();
        return false;
    }
    if(amount_views == 0){
        ShowNotice("warning","Warning","Please input Video Views amount.");
        $('#videoviews_input').focus();
        return false;
    }
    if(starting_viewers < 0){
        ShowNotice("warning","Warning","Please input Live viewers correctly.");
        $('#liveviewers_input').focus();
        return false;
    }
    if(amount_views < 0){
        ShowNotice("warning","Warning","Please input Video Views correctly.");
        $('#videoviews_input').focus();
        return false;
    }
    if(starting_viewers > 1000){
        ShowNotice("warning","Warning","Amount must be lower than 1000.");
        $('#liveviewers_input').focus();
        return false;
    }
    if(starting_viewers % 100 != 0){
        ShowNotice("warning","Warning","Amount must be mutiple of 100.");
        $('#liveviewers_input').focus();
        return false;
    }
    if(amount_views % 1000 != 0){
        ShowNotice("warning","Warning","Amount must be mutiple of 1000.");
        $('#videoviews_input').focus();
        return false;
    }
    if(parseFloat(total_price) > parseFloat(user_fund)){
        ShowNotice("warning","Warning","Not enough funds.Please add more.");
        return false;
    }
    return true;
}
var PageChangeAction = function(){
    $(".li-step").removeClass("active");
    $("#step_"+current_page).addClass("active");
    if(current_page == 1){
        $(".main-pane").show();
        $(".confirm-pane").hide();
        $(".additional-pane").hide();
        $("#bar .progress-bar").css({width:"33%"});
    }else  if(current_page == 2){
        $(".main-pane").hide();
        $(".confirm-pane").hide();
        $(".additional-pane").show();
        $("#bar .progress-bar").css({width:"66%"});
    }else  if(current_page == 3){
        $(".main-pane").hide();
        $(".confirm-pane").show();
        $(".additional-pane").hide();
        $("#bar .progress-bar").css({width:"100%"});
    }
}
var ChangeButtonState = function(){
    if(current_page == 1){
        $("#btnPrevious").prop("disabled",true);
        $("#btnNext").prop("disabled",false);
        $("#btnFinish").hide();
        $("#btnDetail").hide();
        $("#btnNext").show();
        $("#btnNew").hide();
    }
    else if(current_page == 3){
        $("#btnPrevious").hide();
        $("#btnNext").hide();
        $("#btnDetail").show();
        $("#btnFinish").hide();
        $("#btnNew").show();
    }else{
        $("#btnPrevious").prop("disabled",false);
        $("#btnNext").hide();
        $("#btnNext").prop("disabled",false);
        $("#btnFinish").show();
        $("#btnDetail").hide();
        $("#btnNew").hide();
    }
}
var InitUi = function(){
    $(".item-status").hide();
    $("#bar .progress-bar").css({width:"33%"});
    $('#keywords_input').tagsInput({
        width: 'auto',
        defaultText: "keyword",
        'onAddTag': function (tag) {
            keywords.push(tag);
        },
        'onChange':function(elem,elem_tags){
           // alert(elem);
        },
        'onRemoveTag' : function(tag){
            var text = tag;
            var temp = [];
            for(var i=0;i<keywords.length;i++){
                if(keywords[i] == text)continue;
                temp.push(keywords[i]);
            }
            keywords = temp;
        }
    });
    LoadImages();
}
var LoadImages = function(){
    return;
    Metronic.blockUI({
        target: '#main-pane',
        overlayColor:'#000',
        animate: true,
        textOnly:true,
        message:"text"
    });
    $.ajax({
        url:$("#image_url").val(),
        type:"get",
        dataType:'json',
        success:function(data){
            var pages_images = data.pages;
            for(var i=0;i<pages_images.length;i++){
                $("#img_page_"+pages_images[i].id).attr("src",pages_images[i].url);
            }
            var groups_images = data.groups;
            for(var i=0;i<groups_images.length;i++){
                $("#img_group_"+groups_images[i].id).attr("src",groups_images[i].url);
            }
            Metronic.unblockUI('#main-pane');
            Metronic.blockUI({
                target: '.page_group',
                overlayColor:'#000',
                animate: false,
                textOnly:true,
                message:" ",
            });
        },
        error:function(){
            ShowNotice("warning","Error","Error With Facebook.com");
            Metronic.unblockUI('.page-content');
        }
    })
}
var ValidatePage = function(){
    if(current_page == 1){
        return StepOneValidate();
    }
    if(current_page == 2){
        return StepTwoValidate();
    }
    return true;
}
var AddCampaign = function(order_id){
    viewers_order_id = 1234;
    views_order_id = 5432;

    var link = $("#share_link").val();
    var keys = keywords.join(",");
    var pages = [];
    $("#pages_container .make-switch").each(function(){
        if($(this).prop("checked")){
            var ttt = $(this).data("id");
            ttt += "##" + $(this).data("text");
            pages.push(ttt);
        }
    });
    var groups = [];
    $("#groups_container .make-switch").each(function(){
        if($(this).prop("checked")){
            var ttt = $(this).data("id");
            ttt += "##" + $(this).data("text");
            groups.push(ttt);
        }
    });
    $.ajax({
        url:$("#save_url").val(),
        data:{_token: $("#csrf_token").val(),link:link,keywords:keys,pages:pages.join("%%"),groups:groups.join("%%"),starting_viewers:starting_viewers,duration_feed:0,amount_views:amount_views,total_price:total_price,viewers_service_id:$("#selectLiveViewers").val(),views_service_id:$("#selectVideoViews").val()},
        type:"post",
        dataType:'json',
        success:function(data){
            if(data.result == "success"){
                ShowNotice("success","Success","Your campaign successfully created.");
                campaign_id = data.campaign_id;
                current_page = 3;
                PageChangeAction();
                ChangeButtonState();
                $("#user_fund_label").html(parseFloat(data.fund).toFixed(2)+" <i class='fa fa-usd'></i>");
            }else if(data.result == "order_failed"){
                ShowNotice("warning","Error","An error ocurred.Please try again.");
                ShowNotice("warning","Error",data.error);
            }
            Metronic.unblockUI('.page-content');
        },
        error:function(){
            ShowNotice("warning","Error","An error ocurred.Please try again");
            Metronic.unblockUI('.page-content');
        }
    })
}
// var LiveViewersOrderRequest = function(){
//     var order_data = "key="+$("#xpress_api_key").val()+"&action=add&service="+$("#selectLiveViewers").val()+"&link="+$("#share_link").val()+"&quantity="+starting_viewers;
//     $.ajax({
//         url:$("#xpress_api_url").val(),
//         type:"post",
//         dataType:"json",
//         data:order_data,
//         success:function(data){
//             viewers_order_id = data.order_id;
//             if(viewers_order_id > 0){
//                 VideoViewsOrderRequest();
//             }else{
//                 ShowNotice("warning","Warning","An error ocurred on the xpressviral.com");
//                 Metronic.unblockUI('.page-content');
//             }
//         },
//         error:function(data){
//             ShowNotice("warning","Warning","An error ocurred on the xpressviral.com");
//             Metronic.unblockUI('.page-content');
//         }
//     })
// }
// var VideoViewsOrderRequest = function(){
//     var order_data = "key="+$("#xpress_api_key").val()+"&action=add&service="+$("#selectVideoViews").val()+"&link="+$("#share_link").val()+"&quantity="+amount_views;
//     $.ajax({
//         url:$("#xpress_api_url").val(),
//         type:"post",
//         dataType:"json",
//         data:order_data,
//         success:function(data){
//             views_order_id = data.order_id;
//             if(views_order_id > 0){
//                 AddCampaign();
//             }else{
//                 ShowNotice("warning","Warning","An error ocurred on the xpressviral.com");
//                 Metronic.unblockUI('.page-content');
//             }
//         },
//         error:function(data){
//             ShowNotice("warning","Warning","An error ocurred on the xpressviral.com");
//             Metronic.unblockUI('.page-content');
//         }
//     })
// }
var OnFinishCampaign = function(){
    if(!StepTwoValidate())return;
    Metronic.blockUI({
        target: '.page-content',
        overlayColor:'#000',
        animate: true
    });
//    LiveViewersOrderRequest();
    AddCampaign();
}
var SearchAction = function(keyword,$obj){
    var cnt = 0;
    $obj.find(".element_content").each(function(){
        var text = $(this).data("text");
        if(text.indexOf(keyword) < 0){
            $(this).hide();
        }else{
            $(this).show();
            cnt+=1;
        }
    })
    if(cnt > 0){
        $obj.find(".display_none").hide();
    }else{
        $obj.find(".display_none").show();
    }
}
$(document).ready(function(){
    InitUi();
//    $("#pages_container .make-switch").prop("checked",true);
    user_fund = $("#user_fund").val();
    $("#btnNext").on("click",function(){
        if(!ValidatePage())return;
        current_page += 1;
        PageChangeAction();
        ChangeButtonState();
    });
    $("#btnPrevious").on("click",function(){
//        if(!ValidatePage())return;
        current_page -= 1;
        PageChangeAction();
        ChangeButtonState();
    });
    $("#btnFinish").on("click",function(){
        if(!ValidatePage())return;
        OnFinishCampaign();
    });
    $("#page_search").keypress(function(e){
        if(e.keyCode == 13){
            var keyword = $(this).val();
            $obj = $("#pages_container");
            SearchAction(keyword,$obj);
        }
    });
    $("#group_search").keypress(function(e){
        if(e.keyCode == 13){
            var keyword = $(this).val();
            $obj = $("#groups_container");
            SearchAction(keyword,$obj);
        }
    });
    $("#pages_total").on("change",function(){
        if($(this).prop("checked")){
            $("#pages_container .make-switch").prop("checked",true);
            $("#pages_container .bootstrap-switch").removeClass("bootstrap-switch-off");
            $("#pages_container .bootstrap-switch").addClass("bootstrap-switch-on");
        }else{
            $("#pages_container .make-switch").prop("checked",false);
            $("#pages_container .bootstrap-switch").removeClass("bootstrap-switch-on");
            $("#pages_container .bootstrap-switch").addClass("bootstrap-switch-off");            
        }
    });
    $("#groups_total").on("change",function(){
        if($(this).prop("checked")){
            $("#groups_container .make-switch").prop("checked",true);
            $("#groups_container .bootstrap-switch").removeClass("bootstrap-switch-off");
            $("#groups_container .bootstrap-switch").addClass("bootstrap-switch-on");
        }else{
            $("#groups_container .make-switch").prop("checked",false);
            $("#groups_container .bootstrap-switch").removeClass("bootstrap-switch-on");
            $("#groups_container .bootstrap-switch").addClass("bootstrap-switch-off");            
        }
    });
    $("#keyword_input").keypress(function(e){
    })
    $("#liveviewers_input").on("change",function(){
        var amount = $(this).val();
        starting_viewers = amount;
        ChangeViewersPrice();
    })
    $("#videoviews_input").on("change",function(){
        var amount = $(this).val();
        amount_views = amount;
        ChangeViewsPrice();
    })
    // $("#selectLiveViewers").on("change",function(){
    //     ChangeViewersPrice();
    // })
    // $("#selectVideoViews").on("change",function(){
    //     ChangeViewsPrice();
    // })
    $("#btnNew").on("click",function(){
        document.location = $("#new_campaign_url").val();
    });
    $("#btnDetail").on("click",function(){
        document.location = $("#detail_url").val()+"/"+campaign_id;
    })
    $("#share_link").focusout(function(){
        if($(this).val() == "")return;
        if(!url_filter_result($(this).val())){ 
            ShowNotice("warning","Warning","Sorry only Facebook Feed/Broadcast links are allowed.");
            $(this).focus();
            $(this).select();
        }
    });
    $("#share_link").keyup(function(){
        var link = $(this).val();
        filter_url(link);
    })
    $("#share_link").on("change",function(){
        var link = $(this).val();
        filter_url(link);
    })
})
var filter_url = function(link){
    if(url_filter_result(link)){
        Metronic.unblockUI('.page_group');
        $(".item-status").show();
        $("#icon_url_check").show();
        $("#btnNext").prop("disabled",false);
    }else{
        Metronic.blockUI({
            target: '.page_group',
            overlayColor:'#000',
            animate: false,
            textOnly:true,
            message:" ",
        });
        $(".item-status").hide();
        $("#icon_url_check").hide();
        $("#btnNext").prop("disabled",true);
    }
}
var url_filter_result = function(link){
    for(var i=0;i<url_filter.length;i++){
        if(link.indexOf(url_filter[i]) >= 0){
            return true;
        }    
    }
    return false;
}
var ChangeViewersPrice = function(){
    if($("#liveviewers_input").val() == ""){
        return;
    }
    starting_viewers = $("#liveviewers_input").val();
    var value = $("#selectLiveViewers").find(":selected").data("value");
    viewers_price = parseFloat(viewers_price_list[value][starting_viewers]).toFixed(2);
    $("#liveviewers_price").val(viewers_price);
    total_price = parseFloat(parseFloat(viewers_price) + parseFloat(views_price)).toFixed(2);
    ChangePriceState();
}
var ChangeViewsPrice = function(){
    if($("#videoviews_input").val() == ""){
        return;
    }
    amount_views = $("#videoviews_input").val();
    var per_price = $("#selectVideoViews").find(":selected").data("price");
    views_price = parseFloat(amount_views/1000 * per_price).toFixed(2);
    $("#videoviews_price").val(views_price);
    total_price = parseFloat(parseFloat(viewers_price) + parseFloat(views_price)).toFixed(2);
    ChangePriceState();
}
var ChangePriceState = function(){
    $("#total_price").html("Total Price : "+total_price);
    if(parseFloat(total_price) > parseFloat(user_fund)){
        $("#total_price").removeClass("label-success");
        $("#total_price").addClass("label-danger");
        $("#icon_price_disallow").show();
        $("#icon_price_allow").hide();
    }else{
        $("#total_price").removeClass("label-danger");
        $("#total_price").addClass("label-success");
        $("#icon_price_disallow").hide();
        $("#icon_price_allow").show();
    }
    $("#btnFinish").html("Create Campaign & Pay "+total_price+" $");
}