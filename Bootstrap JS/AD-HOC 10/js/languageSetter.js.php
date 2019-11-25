    $("#lang").change(function(){
        let lang = $(this).val();
        Cookies.set('language', lang,{ expires: 1 });
        setLang(lang, thisPage);
    });

    function checkLanguage(){
        let lang = Cookies.get('language');
        if(lang === undefined){
            setLang("<?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?>", thisPage);
        } else {
            setLang(lang, thisPage);
        }
    }


    function setLang(lang, page){
        $.ajax({
            type: "post",
            dataType: "json",
            url: "langVars.json",
            success: function(vars) {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "lang.json",
                    success: function(response) {
                        for (let i = 0; i < Object.keys(vars[page]).length; i++) {
                            switch (vars[page][i]["function"]){
                                case "html":
                                    $(vars[page][i]["entity"]).html(response[page][lang][vars[page][i]["key"]]);
                                    break;
                                case "attr":
                                    $(vars[page][i]["entity"]).attr(vars[page][i]["attr"], response[page][lang][vars[page][i]["key"]]);
                                    break;
                                case "text":
                                    $(vars[page][i]["entity"]).text(response[page][lang][vars[page][i]["key"]]);
                                    break;
                                case "val":
                                    $(vars[page][i]["entity"]).val(response[page][lang][vars[page][i]["key"]]);
                                    break;
                                case "nav":
                                    $('#lang').val(lang);
                                    break;
                                case "logOut":
                                    $('#logOut').html(response["nav"][lang]["logOut"]);
                                    break;
                            }
                        }
                    }
                });

            }
        });
    }