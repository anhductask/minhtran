(function (porfolio, $) {

    var settings = {};
    var projectIds = [];
    var projects =[];

    porfolio.getUrl = function(projectId){
        return "http://www.behance.net/v2/projects/" + projectId + "?api_key=" + settings.apiKey;
    };

    porfolio.getData = function(url, callback){
        $.ajax({
            method: "GET",
            url: url,
            dataType: 'jsonp',
            error:function (xhr, ajaxOptions, thrownError){
                callback(false);
            }
        })
        .done(function(data) {
            callback(data);
        });
    };

    porfolio.renderGrid = function(){
        $.each(projects, function(index, item){
            $.tmpl($("#divTemplate").html(), item).appendTo("#divImages");
        });
    };

    porfolio.getProject = function(){
        if(projectIds.length == 0){
            porfolio.renderGrid();
            return;
        }

        projectId = projectIds.pop();

        var url =porfolio.getUrl(projectId);

        porfolio.getData(url, function(data){
            if(data){
                projects.push(data.project);
            }
            porfolio.getProject();
        });
    };

    porfolio.init = function (options) {
        settings = $.extend(settings, options);
      
        var url = porfolio.getUrl(settings.projectId);
        
        porfolio.getData(url, function(data){
            if (data){
                $.each(data.project.modules, function(index, item){
                    if(item.type=="text"){
                        projectIds.push(item.text_plain);
                    }
                });
            }
            porfolio.getProject();
        });
    };
}(window.porfolio = window.porfolio || {}, jQuery));

