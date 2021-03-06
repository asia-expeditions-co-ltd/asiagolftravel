$(document).ready(function(){
    $(window).load(function(){
        $('img').each(function(){
            if(!this.complete || typeof this.naturalWidth=="undefined" || this.naturalWidth==0){
                this.src='http://asiagolftravel.com/photos/share/thumbs/noImage.jpg';
            }
        });
    });
    $("addtourpackage").trigger('click');
    var baseUrl=location.protocol+'//'+location.host+"/";
    $(document).on("click","ul.country li",function(){
        dataid=$(this).data('id');
        $.ajax({
            method:"GET",
            url:baseUrl+"hotels-resorts/"+dataid,
            data:"id="+dataid,
            dataType:'json',
            success:function(data){
                for(var i=0;i<2;i++){
                    if(i==0){
                        $('#re1').remove();$('#addnew .col-lg-4').remove();$('#more #more1').remove()
                    }
                    if(i==1){
                        var cnt=0;
                        for(var x=0;x<data.data.length;x++){
                            cnt++;
                            if(cnt<=6){
                                var a='/golf-courses-details/'+data.data[x].slug;$('#addnew').append('<div class="col-lg-4 col-md-6 col-sm-6 portfolio-item filter-kh wow fadeInUp" data-wow-delay="0.'+(cnt*4-2)+'s" style="margin-top: 10px; margin-bottom: 10px; overflow: inherit;">'+'<div class="item wow bounceInUp" data-wow-duration="1.5s">'+'<div class="card">'+'<a href="'+a+'"><img src="/photos/share/thumbs/'+data.data[x].photo+'" alt="img" class="img-fluid"></a>'+'<div  class="card-body" style="padding: 0.15rem; margin-left: 10px;">'+'<a href=""><span class="">'+data.data[x].pro_name+'</span></a>'+'<p style="height: 30px; font-size: 16px">'+data.data[x].title+'</p><p></p>'+'<a href="'+a+'"><center><button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center></a>'+'</div></div></div></div>')
                            }
                            var country=data.data[x].country_id;
                            var type=data.data[x].type;
                            if(cnt==7){
                                $('#more').append('<a href="all-detail/'+country+'/'+type+'" id="more1"  class="btnmore"><span>View More</span></a>')
                            }
                        }
                    }
                }
            },
            error:function(){
            return!1
            },
        })
    });
    $(document).on("click","ul.country_golf li.datacun",function(){
        data_id=$(this).data('id');
        $.ajax({
            method:"GET",
            url:baseUrl+"golf_courses/"+data_id,
            data:"id="+data_id,
            dataType:'json',
            success:function(datacun){
                console.log(datacun);
                for(var i=0;i<2;i++){
                    if(i==0){
                        $('#regolf').remove();
                        $('#addgolf .col-lg-4').remove();
                        $('#more #more1').remove()
                    }
                    if(i==1){
                        var cnt=0;for(var x=0;x<datacun.data_golf.length;x++){
                            cnt++;
                            if(cnt<=6){
                                var a='/golf-courses-details/'+datacun.data_golf[x].slug;
                                $('#addgolf').append('<div class="col-lg-4 col-md-6 col-sm-6 portfolio-item filter-kh wow fadeInUp" data-wow-delay="0.'+(cnt*4-2)+'s" style="margin-top: 10px; margin-bottom: 10px; overflow: inherit;">'+'<div class="item wow bounceInUp" data-wow-duration="1.5s">'+'<div class="card">'+'<a href="'+a+'"><img src="/photos/share/thumbs/'+datacun.data_golf[x].photo+'" alt="img" class="img-fluid"></a>'+'<div  class="card-body" style="padding: 0.15rem; margin-left: 10px;">'+'<a href=""><span class="">'+datacun.data_golf[x].pro_name+'</span></a>'+'<p style="height: 30px; font-size: 16px">'+datacun.data_golf[x].title+'</p><p></p>'+'<a href="'+a+'"><center><button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center></a>'+'</div></div></div></div>')
                            }
                            var country=datacun.data_golf[x].country_id;
                            var type=datacun.data_golf[x].type;
                            if(cnt==7){
                                $('#more').append('<a href="all-detail/'+country+'/'+type+'" id="more1"  class="btnmore"><span>View More</span></a>')
                            }
                        }
                    }
                }
            },
            error:function(){
                return!1
            },
        })
    });
    $(document).on("click","ul.country_tourpackage li.datacun",function(){
        data_id=$(this).data('id');
        $.ajax({
            method:"GET",
            url:baseUrl+"tour-packages/"+data_id,
            data:"id="+data_id,
            dataType:'json',
            success:function(datatour){
                for(var i=0;i<10;i++){
                    if(i==0){
                        $('#reold').remove();
                        $('#addtourpackage .col-lg-4').remove();
                        $('#more #more1').remove()
                    }
                    if(i==1){
                        var cnt=0;
                        for(var x=0;x<datatour.mytour.length;x++){
                            cnt++;if(cnt<=6){
                                var a='/golf-details/'+datatour.mytour[x].slug;$('#addtourpackage').append('<div class="col-lg-4 col-md-6 col-sm-6 portfolio-item filter-kh wow fadeInUp" data-wow-delay="0.'+(cnt*4-2)+'s" style="margin-top: 10px; margin-bottom: 10px; overflow: inherit;">'+'<div class="item wow bounceInUp" data-wow-duration="1.5s">'+'<div class="card">'+'<a href="'+a+'"><img src="/photos/share/thumbs/'+datatour.mytour[x].photo+'" alt="img" class="img-fluid"></a>'+'<div  class="card-body" style="padding: 0.15rem; margin-left: 10px;">'+'<a href=""><span class="">'+datatour.mytour[x].pro_name+'</span></a>'+'<p style="height: 30px; font-size: 16px">'+datatour.mytour[x].title+'</p><p></p>'+'<a href="'+a+'"><center><button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></center></a>'+'</div></div></div></div>')
                            }
                            var country=datatour.mytour[x].country_id;
                            var type=datatour.mytour[x].type;
                            if(cnt==7){
                                $('#more').append('<a href="all-detail/'+country+'/'+type+'" id="more1"  class="btnmore"><span>View More</span></a>')
                            }
                        }
                    }
                }
            },
            error:function(){
                return!1
            },
        })
    })
});