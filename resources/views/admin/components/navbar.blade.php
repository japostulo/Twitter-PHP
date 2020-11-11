
<div class="">
    <nav class="w-1/6">
        <a src="{path: '/'}" class="block cursor-pointer text-center fa fa-twitter fa-2x w-16 mb-8"></a>

        <a src='/home' class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-home fa-2x w-16 "> </div>
                <label class="hover:text-blue-500"> Home </label>
            </div>
        </a>

        <a src='{path:"Explore"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-hashtag fa-2x w-16"> </div>
                <label> Explore </label>
            </div>
        </a>

        <a src='{path:"Notifications"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-bell fa-2x w-16"> </div>
                <label> Notifications </label>
            </div>
        </a>

        <a src='{path:"Messages"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-envelope fa-2x w-16"> </div>
                <label> Messages </label>
            </div>
        </a>

        <a src='{path:"Bookmarks"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-bookmark fa-2x w-16"> </div>
                <label> Bookmarks </label>
            </div>
        </a>

        <a src='{path:"Lists"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-list-alt fa-2x w-16"> </div>
                <label> Lists </label>
            </div>
        </a>

        <a src='{path:"Profile"}' exact class="cursor-pointer m-10">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-user fa-2x w-16"> </div>
                <label> Profile </label>
            </div>
        </a>
        
        <a to='/more' exact class="cursor-pointer m-10 mb-4">
            <div class="hover:text-blue-500">
                <div class="text-center fa fa-info fa-2x fa-2x w-16"> </div>
                <label> More </label>
            </div>
        </a>

        <button class="w-full rounded-full m-0 pt-2 pb-2 mt-8" style="background-color:#1da1f2; border:2px solid #1da1f2; font-weight:bold" data-toggle="modal" data-target="#tweetModal">Tweet</button>

    </nav>
</div>

<style>

    span{
        font-weight:bold;
        color:black;
        cursor:pointer
    }
    
    .active{
       color:#1da1f2
    ; 
    }
    
    .active span{
        color:#1da1f2;
        
    }
    
</style>


    


