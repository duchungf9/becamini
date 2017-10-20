<?php
/*
Template name: Page - Full Width
*/
get_header(); ?>

<?php do_action('flatsome_before_page'); ?>

<div id="content" role="main" class="content-area">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
    <style type="text/css">
        .divBottom{
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .faq-c {
            border-bottom: 1px dotted #ccc;
            padding: 1em 0;
        }

        .faq-t {
            line-height: 1em;
            color: #aaa;
            font-family: sans-serif;
            float:left;
            font-weight: 700;
            padding-right: 0.3em;
            -webkit-transition: all 200ms;
            -moz-transition: all 200ms;
            transition: all 200ms;
        }

        .faq-o {
            transform: rotate(-45deg);
            transform-origin: 50% 50%;
            -ms-transform: rotate(-45deg);
            -ms-transform-origin: 50% 50%;
            -webkit-transform: rotate(-45deg);
            -webkit-transform-origin: 50% 50%;
            -webkit-transition: all 200ms;
            -moz-transition: all 200ms;
            transition: all 200ms;
        }

        .faq-q {
            cursor: pointer;
            font-size: 1.5em;
            font-weight: 100;
        }

        .faq-a {
            clear: both;
            color: #666;
            display: none;
            padding-left: 1.5em;
        }
        .left{
            max-width: 50%;
        }
        .left p {
            text-align: justify;
            font-size: 12px;
            color: #0000cc;
        }


        @import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css';
        @import 'https://fonts.googleapis.com/css?family=Roboto:700,400';
        /*
        *  Basic Reset
        */

        *,
        *:after,
        *:before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /**
         * Basics Styles
         */
        html {
            font-size: 62.5%;
        }
        body {
            background-color: #eee;
            font-family: Roboto;
            font-weight: 400;
            font-size: 1.6em;
            line-height: 1.6;
            color: #666;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
        a:hover {
            color: #2980b9;
        }

        h2 {
            line-height: 1.2;
            margin-bottom: 1.6rem;
        }

        .wrapper {
            max-width: 250px;
            margin: 50px auto;
            padding-left: 1em;
            padding-right: 1em;
        }

        /**
         * Helpers
         */
        .border-tlr-radius {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }

        .text-center { text-align: center; }

        .radius { border-radius: 2px; }

        .padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

        .shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

        .shadowDepth1 {
            box-shadow:
                    0 1px 3px rgba(0,0,0, 0.12),
                    0 1px 2px rgba(0,0,0, 0.24);
        }


        /**
         * Card Styles
         */

        .card {
            background-color: #fff;
            margin-bottom: 1.6rem;
        }

        .card__padding {
            padding: 1.6rem;
        }

        .card__image {
            min-height: 100px;
            background-color: #eee;
        }
        .card__image img {
            width: 100%;
            max-width: 100%;
            display: block;
        }

        .card__content {
            position: relative;
        }

        /* card meta */
        .card__meta time {
            font-size: 1.5rem;
            color: #bbb;
            margin-left: 0.8rem;
        }

        /* card article */
        .card__article {
            font-size: 12px;
        }
        .card__article a {
            text-decoration: none;
            color: #444;
            transition: all 0.5s ease;
        }
        .card__article a:hover {
            color: #2980b9;
        }

        /* card action */




        .card__author img,
        .card__author-content {
            display: inline-block;
            vertical-align: middle;
        }

        .card__author img{
            border-radius: 50%;
            margin-right: 0.6em;
        }








    </style>
   <div class="container">
       <div class="divBottom">
           <div class="left">
               <h3 class="acc-title">CÂU HỎI THƯỜNG GẶP</h3>
               <div class="faq-c">
                   <div class="faq-q"><span class="faq-t">+</span>Phụ kiện HDPE vặn ren là gì?</div>
                   <div class="faq-a">
                       <p>Phụ kiện HDPE vặn ren (hay còn gọi là phụ kiện HDPE siết gioăng) là phụ kiện với thành phần chủ yếu là nhựa PP, sản xuất bằng phương pháp ép áp lực, dùng để nối nhanh các loại ống HDPE. Khi nối nhanh ống HDPE bằng phụ kiện này ta có thể thao tác rất đơn giản bằng cách nới lỏng 2 đầu phụ kiện, cắm trực tiếp ống và siết 2 đầu phụ kiện lại. Hệ thống gioăng, chặn gioăng, giữ ống bên trong sẽ đảm bảo không rò rỉ nước và giữ chặt ống không bị tuột.</p>
                   </div>
               </div>
               <div class="faq-c">
                   <div class="faq-q"><span class="faq-t">+</span>Phụ kiện HDPE vặn ren là gì?</div>
                   <div class="faq-a">
                       <p>Phụ kiện HDPE vặn ren (hay còn gọi là phụ kiện HDPE siết gioăng) là phụ kiện với thành phần chủ yếu là nhựa PP, sản xuất bằng phương pháp ép áp lực, dùng để nối nhanh các loại ống HDPE. Khi nối nhanh ống HDPE bằng phụ kiện này ta có thể thao tác rất đơn giản bằng cách nới lỏng 2 đầu phụ kiện, cắm trực tiếp ống và siết 2 đầu phụ kiện lại. Hệ thống gioăng, chặn gioăng, giữ ống bên trong sẽ đảm bảo không rò rỉ nước và giữ chặt ống không bị tuột.</p>
                   </div>
               </div>
               <div class="faq-c">
                   <div class="faq-q"><span class="faq-t">+</span>Phụ kiện HDPE vặn ren là gì?</div>
                   <div class="faq-a">
                       <p>Phụ kiện HDPE vặn ren (hay còn gọi là phụ kiện HDPE siết gioăng) là phụ kiện với thành phần chủ yếu là nhựa PP, sản xuất bằng phương pháp ép áp lực, dùng để nối nhanh các loại ống HDPE. Khi nối nhanh ống HDPE bằng phụ kiện này ta có thể thao tác rất đơn giản bằng cách nới lỏng 2 đầu phụ kiện, cắm trực tiếp ống và siết 2 đầu phụ kiện lại. Hệ thống gioăng, chặn gioăng, giữ ống bên trong sẽ đảm bảo không rò rỉ nước và giữ chặt ống không bị tuột.</p>
                   </div>
               </div>
               <div class="faq-c">
                   <div class="faq-q"><span class="faq-t">+</span>Phụ kiện HDPE vặn ren là gì?</div>
                   <div class="faq-a">
                       <p>Phụ kiện HDPE vặn ren (hay còn gọi là phụ kiện HDPE siết gioăng) là phụ kiện với thành phần chủ yếu là nhựa PP, sản xuất bằng phương pháp ép áp lực, dùng để nối nhanh các loại ống HDPE. Khi nối nhanh ống HDPE bằng phụ kiện này ta có thể thao tác rất đơn giản bằng cách nới lỏng 2 đầu phụ kiện, cắm trực tiếp ống và siết 2 đầu phụ kiện lại. Hệ thống gioăng, chặn gioăng, giữ ống bên trong sẽ đảm bảo không rò rỉ nước và giữ chặt ống không bị tuột.</p>
                   </div>
               </div>

           </div>
           <div class="right">
               <div class="support">
                   <h3 class="acc-title">HỖ TRỢ</h3>
                   <div class="card radius shadowDepth1">
                       <div class="card__image border-tlr-radius">
                           <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
                       </div>
                       <div class="card__content card__padding">
                           <article class="card__article">
                               <p>Đậu Ngọc Thắng</p>
                               <p>HÀ NỘI</p>
                               <p>0904 899 332</p>
                           </article>
                       </div>
                   </div>
               </div>
               </div>
           </div>
       </div>
   </div>
</div>

<?php do_action('flatsome_after_page'); ?>

<?php get_footer(); ?>
