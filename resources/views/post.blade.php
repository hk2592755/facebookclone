
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>


    <!-- Fontawesome-Css-Link -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <!-- Coustome-StyleSheet-Link -->
    <link rel="stylesheet" href="{{asset('assets/css/indexstyle.css')}}">


</head>

<body>

    <div class="page_wrape">

        <!--header-Start-->

        <header class="d_flex fixed">
            <div class="left-part d_flex">
                <div class="logo">
                    <img src="{{asset('assets/img/logo.png')}}">
                </div>
                <div class="search_bar">
                    <form>
                        <input type="text" placeholder="Search Facebook">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="mid-menu">
                <ul class="d_flex">
                    <li class="active"><a href="#"><img src="{{asset('assets/img/icon/home.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/friend.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/watch_top.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/market_top.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/groups_top.png')}}"></a></li>
                </ul>
            </div>
            <div class="right-part">
                <ul class="d_flex_sb">
                    <li>
                        <a href="#" class="avtar d_flex">
                            <div class="round-img">
                                <img src="{{asset('assets/img/srk.jpg')}}">
                            </div>
                            <span>Srk</span>
                        </a>
                    </li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/menu.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/messanger_top.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/notification.png')}}"></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/icon/more.png')}}"></a></li>
                </ul>
            </div>
        </header>


        <!-- Main Content -->
        <div class="main_content">
            <div class="left-sidebar">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/covid.png')}}"></span>
                            <h4>COVID-19 Information Centre</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/find-friend.png')}}"></span>
                            <h4>Find Friends</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/market-place.png')}}"></span>
                            <h4>Marketplace</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/event.png')}}"></span>
                            <h4>Events</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/groups.png')}}"></span>
                            <h4>Groups</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/watch.png')}}"></span>
                            <h4>Watch</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/memories.png')}}"></span>
                            <h4>Memories</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/saved.png')}}"></span>
                            <h4>Saved</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/page.png')}}"></span>
                            <h4>Pages</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/jobs.png')}}"></span>
                            <h4>Jobs</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/ad-center.png')}}"></span>
                            <h4>Ad Centre</h4>
                        </a>
                    </li>
                    <li class="see_more">
                        <a href="#">
                            <span class="icon"><i class="fas fa-angle-down"></i></span>
                            <h4>See More</h4>
                        </a>
                    </li>
                    <li class="overflow_btn">
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/ad-manger.png')}}"></span>
                            <h4>Ad Manger</h4>
                        </a>
                    </li>
                    <li class="overflow_btn">
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/blood-donation.png')}}"></span>
                            <h4>Blood Donations</h4>
                        </a>
                    </li>
                    <li class="overflow_btn">
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/community-help.png')}}"></span>
                            <h4>Community Help</h4>
                        </a>
                    </li>
                    <li class="overflow_btn">
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/messanger.png')}}"></span>
                            <h4>Messenger</h4>
                        </a>
                    </li>
                    <li class="overflow_btn">
                        <a href="#">
                            <span class="icon"><img src="{{asset('assets/img/icon/most-recent.png')}}"></span>
                            <h4>Most recent</h4>
                        </a>
                    </li>
                    <li class="see_less">
                        <a href="#">
                            <span class="icon"><i class="fas fa-angle-up"></i></span>
                            <h4>See Less</h4>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="middle_feed">
                <div class="strory">
                    <ul class="d_flex_sb">
                        <li>
                            <a href="#">
                                <div class="create_story">
                                    <div class="story_thumb">
                                        <img src="{{asset('assets/img/srk.jpg')}}">
                                    </div>
                                    <div class="story_btn">
                                        <span class="d_flex_center"><img src="{{asset('assets/img/icon/creat_story.png')}}" alt=""
                                                srcset=""></span>
                                        <p>Create Story</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="create_story other-story">
                                    <div class="story_thumb">
                                        <img src="{{asset('assets/img/bill-gates.jpg')}}">
                                    </div>
                                    <div class="story_profile">
                                        <span class="round-img"><img src="{{asset('assets/img/bill-gates.jpg')}}"></span>
                                    </div>
                                    <div class="story_name">
                                        <p>Bill Gates</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="create_story other-story">
                                    <div class="story_thumb">
                                        <img src="{{asset('assets/img/christiano.jpg')}}">
                                    </div>
                                    <div class="story_profile">
                                        <span class="round-img"><img src="{{asset('assets/img/christiano.jpg')}}"></span>
                                    </div>
                                    <div class="story_name">
                                        <p>Cristiano Ronaldo</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="create_story other-story">
                                    <div class="story_thumb">
                                        <img src="{{asset('assets/img/mark.jpg')}}">
                                    </div>
                                    <div class="story_profile">
                                        <span class="round-img"><img src="{{asset('assets/img/mark.jpg')}}"></span>
                                    </div>
                                    <div class="story_name">
                                        <p>Mark Zuckerberg</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="create_story other-story">
                                    <div class="story_thumb">
                                        <img src="{{asset('assets/img/srk.jpg')}}">
                                    </div>
                                    <div class="story_profile">
                                        <span class="round-img"><img src="{{asset('assets/img/srk.jpg')}}"></span>
                                    </div>
                                    <div class="story_name">
                                        <p>Shah Rukh Khan</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="feed_and_add_section">
                    <div class="create_post comman_bg_feed">
                        <div class="create_input d_flex">
                            <div class="profile_thumb round-img">
                                <img src="{{asset('assets/img/srk.jpg')}}">
                            </div>

                            <form action="">
                                <a href="createpost">
                                <input type="text" placeholder="What's On Your Mind?">
                            </a>
                            </form>

                        </div>
                        <div class="create_btn">
                            <ul class="d_flex">
                                <li>
                                    <a href="#" class="d_flex_center">
                                        <span><img src="{{asset('assets/img/icon/live-video.png')}}"></span>
                                        <h4>Live Video</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d_flex_center">
                                        <span><img src="{{asset('assets/img/icon/photo.png')}}"></span>
                                        <h4>Photo/video</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d_flex_center">
                                        <span><img src="{{asset('assets/img/icon/felling.png')}}"></span>
                                        <h4>Feeling/Activity</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="create_room comman_bg_feed">
                        <a href="#" class="d_flex_center">
                            <img src="{{asset('assets/img/icon/room.png')}}">
                            <span>Create Room</span>
                        </a>
                    </div>
                    <div class="main_post comman_bg_feed">
                        <div class="post_top d_flex_sb">
                            <div class="profile d_flex">
                                <div class="round-img">
                                    <img src="{{asset('assets/img/srk.jpg')}}">
                                </div>
                                <div class="post_time_name ml-10">
                                    <span>Shah Rukh Khan</span>
                                    <div class="time d_flex">
                                        <span class="mr-5">23h</span>
                                        <img src="{{asset('assets/img/icon/public.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="post_more">
                                <a href="#" class="d_flex_center">
                                    <img src="{{asset('assets/img/icon/post_more.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="post_caption">
                            <p>They say time is measured in days, months and beards....Time now for a trim and get back
                                to work I guess...Wishing
                                everyone who is getting back to a bit of normalcy...safe and healthy days and months of
                                work ahead....love u all.</p>
                        </div>
                        <div class="post_hashtag">
                            <ul class="d_flex">
                                <li><a href="#">#Work</a></li>
                                <li><a href="#">#ApnaGhar</a></li>
                                <li><a href="#">#Home</a></li>
                            </ul>
                        </div>
                        <div class="post_img">
                            <a href="#"><img src="{{asset('assets/img/feed-1.jpg')}}"></a>
                        </div>
                        <div class="see_who_react">
                            <ul class="d_flex_sb">
                                <li class="d_flex">
                                    <div class="likes d_flex mr-5">
                                        <span><img src="{{asset('assets/img/icon/liked.png')}}" alt=""></span>
                                        <span><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></span>
                                    </div>
                                    <div class="like_count">
                                        <span>You and 1M others</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="commant_and_share d_flex">
                                        <span class="mr-5">15k comments</span>
                                        <span>11k Share</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="like_option">
                            <ul class="d_flex_sb">
                                <li class="d_flex_center like_btn">
                                    <span class="mr-5 b_like"><img src="{{asset('assets/img/icon/like.png')}}"></span>
                                    <span class="mr-5 a_like"><img src="{{asset('assets/img/icon/liked.png')}}"></span>
                                    <h4>Like</h4>
                                </li>
                                <li class="d_flex_center">
                                    <span class="mr-5"><img src="{{asset('assets/img/icon/comment.png')}}"></span>
                                    <h4>Comment</h4>
                                </li>
                                <li class="d_flex_center">
                                    <span class="mr-5"><img src="{{asset('assets/img/icon/share.png')}}"></span>
                                    <h4>Share</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main_post comman_bg_feed">
                        <div class="post_top d_flex_sb">
                            <div class="profile d_flex">
                                <div class="round-img">
                                    <img src="{{asset('assets/img/christiano.jpg')}}">
                                </div>
                                <div class="post_time_name ml-10">
                                    <span>Cristiano Ronaldo</span>
                                    <div class="time d_flex">
                                        <span class="mr-5">1 Day</span>
                                        <img src="{{asset('assets/img/icon/public.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="post_more">
                                <a href="#" class="d_flex_center">
                                    <img src="{{asset('assets/img/icon/post_more.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="post_caption">
                            <p>Believe as much as we do!</p>
                        </div>
                        <div class="post_hashtag">
                            <ul class="d_flex">
                                <li><a href="#">#CR7</a></li>
                            </ul>
                        </div>
                        <div class="post_img">
                            <a href="#"><img src="{{asset('assets/img/feed-2.jpg')}}"></a>
                        </div>
                        <div class="see_who_react">
                            <ul class="d_flex_sb">
                                <li class="d_flex">
                                    <div class="likes d_flex mr-5">
                                        <span><img src="{{asset('assets/img/icon/liked.png')}}" alt=""></span>
                                        <span><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></span>
                                    </div>
                                    <div class="like_count">
                                        <span>You and 999k others</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="commant_and_share d_flex">
                                        <span class="mr-5">12k comments</span>
                                        <span>1k Share</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="like_option">
                            <ul class="d_flex_sb">
                                <li class="d_flex_center like_btn">
                                    <span class="mr-5 b_like"><img src="{{asset('assets/img/icon/like.png')}}"></span>
                                    <span class="mr-5 a_like"><img src="{{asset('assets/img/icon/liked.png')}}"></span>
                                    <h4>Like</h4>
                                </li>
                                <li class="d_flex_center">
                                    <span class="mr-5"><img src="{{asset('assets/img/icon/comment.png')}}"></span>
                                    <h4>Comment</h4>
                                </li>
                                <li class="d_flex_center">
                                    <span class="mr-5"><img src="{{asset('assets/img/icon/share.png')}}"></span>
                                    <h4>Share</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar">
                <div class="contact_list">
                    <div class="contact_title">
                        <ul class="d_flex_sb">
                            <li>
                                <p>Contact</p>
                            </li>
                            <li>
                                <div class="more_option">
                                    <ul class="d_flex">
                                        <li><a href="#" class="d_flex_center"><img src="{{asset('assets/img/icon/new_room.png')}}"></a></li>
                                        <li><a href="#" class="d_flex_center"><i class="fas fa-search"></i></a></li>
                                        <li><a href="#" class="d_flex_center"><img src="{{asset('assets/img/icon/post_more.png')}}"></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="contact">
                        <ul>
                            <li>
                                <a href="#" class="d_flex">
                                    <div class="round-img">
                                        <img src="{{asset('assets/img/bill-gates.jpg')}}">
                                    </div>
                                    <h4>Bill Gates</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d_flex">
                                    <div class="round-img">
                                        <img src="{{asset('assets/img/christiano.jpg')}}">
                                    </div>
                                    <h4>Cristiano Ronaldo</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d_flex">
                                    <div class="round-img">
                                        <img src="{{asset('assets/img/mark.jpg')}}">
                                    </div>
                                    <h4>Mark Zuckerberg</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>




    <!-- Jquery-File-Link -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>


    <script>

        $(document).ready(function () {
            $('.see_more').click(function () {
                $(this).hide();
                $('.overflow_btn').addClass('active');
                $('.see_less').addClass('active');
            })

            $('.see_less').click(function () {
                $('.see_more').show();
                $('.overflow_btn').removeClass('active');
                $('.see_less').removeClass('active');
            })

            $('.like_btn').click(function () {
                $(this).children('.b_like').toggleClass('hide')
                $(this).children('.a_like').toggleClass('show')
                $(this).children('.like_btn h4').toggleClass('blue')
            })
        })

    </script>



</body>

</html>
