/**
 * Created by iuli on 5/26/15.
 */

$(function(){
    /**
     * @var Array urls
     */
    var searchSubjects = {"company": [], "article": []},
        ajaxRequests = [],
        $form = $(".search-form"),
        $resultList = $("#search-result"),
        $searchContainer = $(".search-result-list"),
        $preloader = $(".preloader"),
        $scrollContainer = $(".nano")
    ;
    // search request
    $form.on
        ("keyup", function()
        {
            resetRequests();
            $resultList.empty();
            $form.find(":checkbox").attr("disabled", false);
            var request = $.get(
                "search/=" + $("#search").val(),
                function(data){
                    if ($(data).length > 0) {
                        $.each(data.results, function(ind, el){
                            var href = "",
                                itemClass = "item-type-",
                                $foundItem = $('<p class="truncate"><a href="#">#</a></p>')
                            ;
                            $foundItem
                                .addClass(itemClass + el.select_type)
                                .find("a")
                                .attr({
                                    "href":  urls[el.select_type] + el.id
                                }).text(el.search_word);
                            $resultList.append($foundItem);
                        });
                        // headers
                        $("<h3></h3>").text("Companies")
                            .addClass("item-type-company")
                            .insertBefore($resultList.find(".item-type-company:eq(0)"));
                        $("<h3></h3>").text("Articles")
                            .addClass("item-type-article")
                            .insertBefore($resultList.find(".item-type-article:eq(0)"));
                        //checkboxes
                        $form.find(":checkbox").attr("disabled",
                            ($resultList.find(".item-type-company").length == 0 || $resultList.find(".item-type-article").length == 0)
                        );
                        //toggle list
                        toggleResultList(true);
                        //scroll
                        restartScroll();
                    } else {
                        toggleResultList(false);
                        toggleProgressBar(false);
                    }
                }, "json"
            );
            ajaxRequests.push(request);

            return false;
    });

    // filters
    $searchContainer.on("change", ":checkbox", function()
    {
        //item-type-company
        var elements = $searchContainer.find(".item-type-" + $(this).data("type"));
        $(this).is(":checked") ? elements.show() :  elements.hide();
        restartScroll();
    });

    // toggle result list
    function toggleResultList(state)
    {
        var flag = $searchContainer.hasClass('hidden');
        if (state != undefined) {
            flag = state;
        }
        if (flag) {
            $searchContainer.removeClass('hidden');
            toggleProgressBar(!flag);
            $searchContainer.find(":checkbox").each(function(){
                $(this).prop("checked",true)
            });
        } else {
            $searchContainer.addClass('hidden');
            toggleProgressBar(!flag);
        }
    }

    // toggle progress bar
    function toggleProgressBar(state)
    {
        var flag = $preloader.hasClass('hidden');
        if (state != undefined) {
            flag = state;
        }
        flag ?
            $preloader.removeClass('hidden') :
            $preloader.addClass('hidden');
    }

    // ajax request stack
    function resetRequests()
    {
        ajaxRequests.forEach(function(el){ el.abort() });
        ajaxRequests = [];
    }

    // hide list when click outside
    $form.click( function(event){
        event.stopPropagation();
    });
    $(document).click( function(){
        toggleResultList(false);
        toggleProgressBar(false);
        $("#search").val("");
    });

    // restart scroll
    function restartScroll()
    {
        $scrollContainer.nanoScroller({ destroy: true });
        $scrollContainer.nanoScroller();
    }
});