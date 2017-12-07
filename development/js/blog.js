/*
File: blog.js
Author: Marquis Massie
Email: massiemarquis@gmail.com
*/
$(document).ready(function(){
    var endPoint = "https://www.googleapis.com/blogger/v3/blogs/";
    var blogID = "6761185821683541982";
    var blogKey = "AIzaSyD9yiP6JUtoSpGgHZNcsjNXHBJkgXUJWHs";
    $.getJSON(endPoint+blogID+"/posts?key="+blogKey, function(blog){
        //Blog API works; create new Blog Posts
        console.log(JSON.stringify(blog));
        //$("#blog").html("<p>"+JSON.stringify(blog)+"</p>");
    });
});