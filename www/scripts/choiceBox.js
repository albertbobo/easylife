//商品详情购买选择下拉框

(function($){

    var cards = $("#wrapper"),
        toggler = cards.find(".toggle"),
        links = cards.find("ul>li>a"),
        li = links.parent('li'),
        count = links.length,
        width = links.outerWidth();

    links.parent("li").each(function(i){
        $(this).css("z-index" , count - i);
    });

    function setClosed(){
        li.each(function(index){
            $(this).css("top" , "0")
                .css("width" , "100%");
        });
        li.addClass('closed');
        toggler.removeClass("active");
    }
    setClosed();

    toggler.on("mousedown" , function(){
        var $this = $(this);

        if($this.is(".active")){
            setClosed();
        }else{

            $this.addClass("active");
            li.removeClass('closed');

            li.each(function(index){
                $(this).css("top" , 50 * (index + 1))
                       .css("width" , "100%");
                     //.css("margin-left" , "0px");
            });
        }
    });

    links.on("click" , function(e){
        var $this = $(this),
            label = $this.data("label");
        icon = $this.children("i").attr("class");

        li.removeClass('active');
        if($this.parent("li").is("active")){
            $this.parent('li').removeClass("active");
        }else{
            $this.parent("li").addClass("active");
        }
        toggler.children("span").text(label);
        toggler.children("i").removeClass().addClass(icon);
        setClosed();
        e.preventDefault;
    });

})(jQuery);

(function($){

    var cards = $("#wrapper2"),
        toggler = cards.find(".toggle"),
        links = cards.find("ul>li>a"),
        li = links.parent('li'),
        count = links.length,
        width = links.outerWidth();

    links.parent("li").each(function(i){
        $(this).css("z-index" , count - i);
    });

    function setClosed(){
        li.each(function(index){
            $(this).css("top" , "0")
                .css("width" , "100%");
        });
        li.addClass('closed');
        toggler.removeClass("active");
    }
    setClosed();

    toggler.on("mousedown" , function(){
        var $this = $(this);

        if($this.is(".active")){
            setClosed();
        }else{

            $this.addClass("active");
            li.removeClass('closed');

            li.each(function(index){
                $(this).css("top" , 50 * (index + 1))
                    .css("width" , "100%");
                //.css("margin-left" , "0px");
            });
        }
    });

    links.on("click" , function(e){
        var $this = $(this),
            label = $this.data("label");
        icon = $this.children("i").attr("class");

        li.removeClass('active');
        if($this.parent("li").is("active")){
            $this.parent('li').removeClass("active");
        }else{
            $this.parent("li").addClass("active");
        }
        toggler.children("span").text(label);
        toggler.children("i").removeClass().addClass(icon);
        setClosed();
        e.preventDefault;
    });

})(jQuery);




(function($){

    var cards = $("#wrapper3"),
        toggler = cards.find(".toggle"),
        links = cards.find("ul>li>a"),
        li = links.parent('li'),
        count = links.length,
        width = links.outerWidth();

    links.parent("li").each(function(i){
        $(this).css("z-index" , count - i);
    });

    function setClosed(){
        li.each(function(index){
            $(this).css("top" , "0")
                   .css("width" , "100%");
        });
        li.addClass('closed');
        toggler.removeClass("active");
    }
    setClosed();

    toggler.on("mousedown" , function(){
        var $this = $(this);

        if($this.is(".active")){
            setClosed();
        }else{

            $this.addClass("active");
            li.removeClass('closed');

            li.each(function(index){
                $(this).css("top" , 50 * (index + 1))
                       .css("width" , "100%");
                     //.css("margin-left" , "0px");
            });
        }
    });

    links.on("click" , function(e){
        var $this = $(this),
            label = $this.data("label");
        icon = $this.children("i").attr("class");

        li.removeClass('active');
        if($this.parent("li").is("active")){
            $this.parent('li').removeClass("active");
        }else{
            $this.parent("li").addClass("active");
        }
        toggler.children("span").text(label);
        toggler.children("i").removeClass().addClass(icon);
        setClosed();
        e.preventDefault;
    });

})(jQuery);