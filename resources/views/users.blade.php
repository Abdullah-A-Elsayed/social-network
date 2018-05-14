

@extends('layouts.app')

@section('content')

<h1 class="page-title">users
    <small>Manage users</small> 
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>users</span>
        </li>
    </ul>
    <div class="page-toolbar">

    </div>
</div>



  

    <!------------------------------------------------------------------------------------------------>


<div class="row">
    <div class="col-md-12">
        <div class="portlet light " id="users_portlet">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject bold uppercase"></span>
                </div>

                <div class="tools"> </div>
            </div>

            <div class="portlet-body">
                <table class="table  table-striped table-bordered table-hover zitable" id="table_users">
                    <thead>
                        <tr>
                            <th data-field="id">Options</th>
                            <th data-field="number">#</th>
                            <th data-field="name">Name</th>
                            <th data-field="friends">friends</th>                      
                            <th data-field="likes">Likes</th>
                            <th data-field="comments">Comments</th>
                            <th data-field="posts">Posts</th>
                            <th data-field="userposts">profile Posts</th>
                            <th data-field="guserposts">Group posts</th>
                            <th data-field="email">Email</th>
                            <th data-field="image">Image</th>
                            <th data-field="city">city</th>
                            <th data-field="country">country</th>
                    


                        </tr>
                    </thead>

                </table>
            </div>

        </div>
    </div>
    <!---------------------end users table------------------>
   
    <div class="col-md-12">
        <div class="row portlet-managed" data-portletgroup="group1" id="row_posts" style="display: none">    
                
                    <div class="portlet light" id="portlet_posts">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <span class="caption-subject bold uppercase">{{isset($text['posts']) ? $text['Posts'] : 'Posts'}}</span>
                             
                                   
                                    <!--<a id="" class="btn dark btn-outline" href="javascript:"><span>Add Questions</span></a>
                                    <a id="" class="btn dark btn-outline" href="javascript:"><span>Remove All</span></a>-->
                            </div>     
                        

                        <div class="portlet-body" id="table_posts_portlet_body">
                            <table class="table  table-striped table-bordered table-hover " id="">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Options</th>
                                            <th data-field="body">Body</th>
                                            <th data-field="type">Posted in</th>
                                            <th data-field="likes">likes</th>

                                            <th data-field="comments">comments</th>
                                            <th data-field="created_at">created at</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                            </table>
                         </div>
                         </div>
                    </div>
        </div>
 

    </div>
<!-----------------------end posts table---------------------->
   
    <div class="col-md-6">
        <div class="row portlet-managed" data-portletgroup="group1" id="row_friends" style="display: none">    
                
                    <div class="portlet light" id="portlet_friends">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <span class="caption-subject bold uppercase">{{isset($text['friends']) ? $text['friends'] : 'friends'}}</span>
                               
                                   
                                    <!--<a id="" class="btn dark btn-outline" href="javascript:"><span>Add Questions</span></a>
                                    <a id="" class="btn dark btn-outline" href="javascript:"><span>Remove All</span></a>-->
                            </div>     
                        

                        <div class="portlet-body" id="table_friends_portlet_body">
                            <table class="table table-striped table-bordered table-hover " id="">
                                    <thead>
                                        <tr>

                                            <th data-field="name">name</th>
                                            <th data-field="email">email</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                            </table>
                         </div>
                         </div>
                    </div>
        </div>
 

    </div>
<!-----------------------end friends <table---------------------->  
  <div class="col-md-6">
        <div class="row portlet-managed" data-portletgroup="group1" id="row_comments" style="display: none">    
                
                    <div class="portlet light" id="portlet_comments">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <span class="caption-subject bold uppercase">{{isset($text['comments']) ? $text['Friends'] : 'Comments'}}</span>
                     
                                   
                                    <!--<a id="" class="btn dark btn-outline" href="javascript:"><span>Add Questions</span></a>
                                    <a id="" class="btn dark btn-outline" href="javascript:"><span>Remove All</span></a>-->
                            </div>     
                        

                        <div class="portlet-body" id="table_comments_portlet_body">
                            <table class="table table-striped table-bordered table-hover " id="">
                                    <thead>
                                        <tr>

                                            <th data-field="username">user</th>

                                            <th data-field="body">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                            </table>
                         </div>
                         </div>
                    </div>
        </div>
 

    </div>
<!-----------------------end comments table---------------------->

</div>




@endsection

@section('script')
<script>
///////////////////////////////////////////////////////////////////////////////////// 

var usersTable = function () {
        var o = function () {
            var text ;
            var icon;
            var container = "#users_portlet";
            $.ajax('users', {
                complete: function (jqXHR, textStatus) {
                    var res = $.parseJSON(jqXHR.responseText);
                                                    number=1

                    res.forEach(function (value, i) {

                        res[i].number=number++;

                        if(res[i].status==1){

                            res[i].status= "Activated";
                                   status= "Suspend";

                            text="text-danger";
                                 icon="glyphicon glyphicon-remove";

                        }else                   
                        {   status= "Activate";
                        res[i].status= "Suspended";
                                                text="text-success";
                                          icon="glyphicon glyphicon-ok";

                                }

                        res[i].image='<img src="'+res[i].image+'" alt="" width="100" height="70">'

                        res[i].id =
                                '   <a href="javascript:" class="portlet-opener2 btn btn-success" id="posts" uid="' + res[i].id + '" data-portletgroup="group6,group5,group4,group3,group2,group1" data-portlet="#row_posts" data-portletcallback="fill_posts_portlet(' + res[i].id + ', \'#portlet_posts\')"><i class="fa fa-comment"></i>Posts</a><br> <a href="javascript:" class="portlet-opener2 btn btn-danger" id="friends" uid="' + res[i].id + '" data-portletgroup="group6,group5,group4,group3,group2,group1" data-portlet="#row_friends" data-portletcallback="fill_friends_portlet(' + res[i].id + ', \'#portlet_friends\')"><i class="fa fa-group"></i> friends </a>';
                    });
                    zitables.populate($("#table_users"), res);
                    ZiPortletManager.init();
                    ZiConfirm.init();
                }
            });
        };
        return{init: function () {
                o();
            }};
}();

//////////////////////////////////////////////////////////////////////////////////////


function fill_posts_portlet(id, portlet) {

                        App.scrollTo($("#table_posts_portlet_body"), +1);

        $.ajax('posts2/' + id, {
            complete: function (jqXHR, textStatus) {
         
                var res = $.parseJSON(jqXHR.responseText);
                res.forEach(function (value, i) {
                     
                  if(res[i].status==1){

                            res[i].status= "Activated";
                                   status= "Suspend";

                            text="text-danger";
                                 icon="glyphicon glyphicon-remove";

                        }else                   
                        {   status= "Activate";
                        res[i].status= "Suspended";
                                                text="text-success";
                                          icon="glyphicon glyphicon-ok";

                        }
                  
                    res[i].id = 
                            ' <a href="javascript:" class="portlet-opener2" id="comments" uid="' + res[i].id + '" data-portletgroup="group6,group5,group4,group3,group2,group1" data-portlet="#row_comments" data-portletcallback="fill_comments_portlet(' + res[i].id + ', \'#portlet_comments\')"><i class="fa fa-comment"></i>Comments</a><br>';
                });
                var t = $("#table_posts_portlet_body table");
                zitables.populate(t, res);
                ZiPortletManager.init();
                ZiConfirm.init();
                $(".country").val(id);


                  }
        });
}

//////////////////////////////////////////////////////////////////////////////////////
function fill_friends_portlet(id, portlet) {

                             App.scrollTo($("#table_friends_portlet_body"), +1);
  

        $.ajax('friends2/' + id, {
            complete: function (jqXHR, textStatus) {
         
                var res = $.parseJSON(jqXHR.responseText);
                res.forEach(function (value, i) {
                     
                  if(res[i].status==1){

                            res[i].status= "Activated";
                                   status= "Suspend";

                            text="text-danger";
                                 icon="glyphicon glyphicon-remove";

                        }else                   
                        {   status= "Activate";
                        res[i].status= "Suspended";
                                                text="text-success";
                                          icon="glyphicon glyphicon-ok";

                        }
                  
                    res[i].id = 
                            ' <a href="javascript:;" class="ziconfirm text-danger" data-confirmcallback="delete_friends(' + id + ',' + res[i].id + ')"> <i class="glyphicon glyphicon-trash"></i>Delete</a> <a href="javascript:;" class="portlet-opener" data-portlet="#row_add_friends" data-portletcallback="edit_friends_portlet(' + res[i].id + ', \'#form_add_friends\')"> <i class="icon-pencil"></i> Edit </a> ';
                });
                var t = $("#table_friends_portlet_body table");
                zitables.populate(t, res);
                ZiPortletManager.init();
                ZiConfirm.init();
                $(".country").val(id);


                  }
        });
}


//////////////////////////////////////////////////////////////////////////////////////
function fill_comments_portlet(id, portlet) {

       

        $.ajax('comments2/' + id, {
            complete: function (jqXHR, textStatus) {
         
                var res = $.parseJSON(jqXHR.responseText);
                res.forEach(function (value, i) {
                     
                  if(res[i].status==1){

                            res[i].status= "Activated";
                                   status= "Suspend";

                            text="text-danger";
                                 icon="glyphicon glyphicon-remove";

                        }else                   
                        {   status= "Activate";
                        res[i].status= "Suspended";
                                                text="text-success";
                                          icon="glyphicon glyphicon-ok";

                        }
                  
                    res[i].id = 
                            ' <a href="javascript:;" class="ziconfirm text-danger" data-confirmcallback="delete_comments(' + id + ',' + res[i].id + ')"> <i class="glyphicon glyphicon-trash"></i>Delete</a> <a href="javascript:;" class="portlet-opener" data-portlet="#row_add_comments" data-portletcallback="edit_comments_portlet(' + res[i].id + ', \'#form_add_comments\')"> <i class="icon-pencil"></i> Edit </a> ';
                });
                var t = $("#table_comments_portlet_body table");
                zitables.populate(t, res);
                ZiPortletManager.init();
                ZiConfirm.init();
                $(".city").val(id);


                  }
        });
}

//////////////////////////////////////////////////////////////////////////////////////


jQuery(document).ready(function () {
    ZiPortletManager.init();
    zitables.init();
    ZiConfirm.init();
//////////////////////////////////    

    usersTable.init();


});




</script>
@endsection
