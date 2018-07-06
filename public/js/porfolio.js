(function (porfolio, $) {

    var settings = {};

    porfolio.init = function (options) {
        settings = $.extend(settings, options);
      
        var url = "http://www.behance.net/v2/projects/" + settings.projectId + "?api_key=" + settings.apiKey;
        
        $.ajax({
            method: "GET",
            url: url,
            dataType: 'jsonp'
        })
        .done(function(data) {
            if (data){
                $("#projectName").html(data.project.name);
                $("#projectDescription").html(data.project.description);
                $.each(data.project.modules, function(index, item){
                    if(item.type=="image"){
                        $("#divImages").append('');
                        $.tmpl($("#divTemplate").html(), item).appendTo("#divImages");
                    }
                });
            }
        });
    };


}(window.porfolio = window.porfolio || {}, jQuery));

