---
extends: _layouts.page
title: About Us
meta_description:
---

@extends('_layouts.page')

@section('content')
   <div class="uk-visible@s" uk-sticky="sel-target: .uk-navbar; cls-active: uk-navbar-sticky; top: 200">
      <div class="uk-navbar" uk-navbar style="background-color: white!important;">
         <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
               <li><a href="#who-we-are" uk-scroll>Who we are</a></li>
{{--               <li><a href="#our-motivation" uk-scroll>Our Motivation</a></li>--}}
               <li><a href="#methodology" uk-scroll>How we do it</a></li>
{{--               <li><a href="#future-looking" uk-scroll>Future looking</a></li>--}}
            </ul>
         </div>
      </div>
   </div>

   <div class="uk-section">
      <div class="uk-container uk-container-small">
         <div class="uk-grid uk-grid-medium uk-flex-middle" id="who-we-are">
            <div class="uk-width-1-3 uk-responsive-width  uk-text-center">
               <img class="image-rounded" src="./../assets/images/icons/about/about.svg" alt="Our history" height="300" width="300" uk-image>
            </div>
            <div class="uk-width-2-3 uk-text-justify">
               <h2>Who we are</h2>
               <p>At Centrisign Digital, we’re an African software consultancy with extensive experience in solving problems and innovating the future of business using technology.</p>
               <p>We are a home for dreamers, innovators and trendsetters. We value engineers because they build our future.</p>
            </div>
         </div>
{{--         <div class="uk-grid uk-grid-large uk-flex-middle" id="our-motivation">--}}
{{--            <div class="uk-width-1-2 uk-text-justify">--}}
{{--               <h2>Our Motivation</h2>--}}
{{--               <p> We build a legacy of successful business ventures in telecommunication; We offer unparalleled innovation in ICT Services and Solutions in the dynamic world of Wireless networking, Broadband Internet Connectivity, End-user software solutions, Personalized Computer Training, Business Software’s development(website design, management and security control software’s), Hardware and Software’s Support.</p>--}}
{{--            </div>--}}
{{--            <div class="uk-width-1-2 uk-responsive-width  uk-text-center">--}}
{{--               <img class="image-rounded" src="./../assets/images/icons/about/business-case.svg" alt="What we do" height="300" width="300" uk-image>--}}
{{--            </div>--}}
{{--         </div>--}}
         <div class="uk-grid uk-grid-large uk-flex-middle" id="methodology">
            <div class="uk-width-2-3 uk-text-justify">
               <h2>How we do it</h2>
               <p>Our approach rests on high standards of software engineering and flexible engagement scenarios for on‑site and distributed projects.</p>
               <p>We deliver business and technology transformation from start to finish, leveraging agile methodologies, proven customer collaboration frameworks, engineering excellence tools, hybrid teams and our award-winning proprietary global delivery platform.</p>
            </div>
            <div class="uk-width-1-3 uk-responsive-width  uk-text-center">
               <img class="image-rounded" src="./../assets/images/icons/about/plan.svg" alt="Our Aim" height="300" width="300" uk-imagee>
            </div>
         </div>
{{--         <div class="uk-grid uk-grid-large uk-flex-middle" id="future-looking">--}}
{{--            <div class="uk-width-1-2 uk-text-justify">--}}
{{--               <h2>We embrace the future</h2>--}}
{{--                <p>We continue to provide superior quality in all our core functions by harnessing the latest technology and using the best equipment, materials and products in the market that meet international industry standards.</p>--}}
{{--                <p>This quick response to client in a dynamic business environment has seen us retain satisfied clients and steadily grow our client base which consists of corporate bodies, government agencies, nonprofit organizations and even individual customers who walk into our premises.</p>--}}
{{--            </div>--}}
{{--            <div class="uk-width-1-2 uk-responsive-width uk-text-center">--}}
{{--               <img class="image-rounded" src="./../assets/images/icons/about/contract.svg" alt="Our Promise" height="300" width="300" uk-image>--}}
{{--            </div>--}}
{{--         </div>--}}
      </div>
   </div>
@endsection