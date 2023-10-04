@extends('frontend.layouts.main')

@section('title', 'About')
@section('main-section')
<!-- START FEATURES 2 -->
<section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <h3>About<span class="text-danger"> me</span></h3>
            </div>
          </div>
        </div>
        <div class="row mt-2 py-5 align-items-center">
          
          <div class="col-lg-8">
            <h3 class="fw-normal">Introduction</h3>
            <p class="text-muted mt-3">
              রংপুর আইডিয়াল ইনস্টিটিউট অব টেকনোলজি (RIIT)একটি স্ব-অর্থায়নের শিক্ষা প্রতিষ্ঠান। 
              গ্লোবালাইজেশনের যুগে বসবাস করে এক বিংশ শতাব্দির চ্যালেঞ্জ মোকাবেলা ও নতুন বিশ্ব
              চাহিদার কথা বিবেচনা করে এ দেশের বিশাল জন গোষ্টিকে বিশেষ করে অবহেলিত উত্তর
              অঞ্চলের জনগোষ্টিকে আধুনিক প্রযুক্তিগত জ্ঞানের সাথে সম্পৃক্ত করে দক্ষ জনশক্তিতে
              পরিনত করার লক্ষে ১৪ই জুলাই ২০০৯ খ্রিঃ রংপুর আইডিয়াল ইনস্টিটিউট অব টেকনোলজি 
              (RIIT), পূর্ব শালবন, সদর, রংপুরে স্থাপিত হয়। বাংলাদেশ কারিগরি শিক্ষা বোর্ডের সকল 
              নিয়মনীতি ও শর্ত পূরণ করে প্রাথমিক ভাবে ২৬শে মে ২০১০ খ্রিঃ সিভিল (৪০) ও 
              ইলেকট্রিক্যাল (৪০) সর্বমোট ৮০টি আসন নিয়ে রংপুর আইডিয়াল ইনস্টিটিউট অব টেকনোলজি
              (RIIT) পাঠদানের অনুমতি পায় যার প্রতিষ্ঠান কোড ১৬১০০। পরবর্তীতে ৩১শে মে ২০১২খ্রিঃ
              ডিপ্লোমা-ইন-টেক্সটাইল শিক্ষাক্রমের দুটি টেকনোলজি টেক্সটাইল (৪০), ও
              গার্মেন্টস ডিজাইন এন্ড প্যাটার্ন মেকিং (৪০) সংযোজনের অনুমতি পায়।ইতিমধ্যে অত্র
              প্রতিষ্ঠানটি সমগ্র উত্তরবঙ্গে কারিগরি শিক্ষার নির্ভরযোগ্য প্রতিষ্ঠান হিসাবে প্রতিষ্ঠিত হয়েছে।
              যার ধারাবাহিকতায় গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রানালয় বিশ্বব্যাংক ও 
              কানাডা সরকারের অর্থায়নে পরিচালিত সফল একটি প্রকল্প স্কিলস এন্ড ট্রেনিং 
              এনহ্যান্সমেন্ট প্রজেক্ট (STEP)এর আওতায় ছাত্র-ছাত্রীদের বৃত্তি ও গ্রান্ট অর্জনকারী 
              রংপুর বিভাগে প্রথম ও একমাত্র বেসরকারী পলিটেকনিক হিসাবে বিবেচিত হয়। প্রতিষ্ঠানটি
              নির্বাহী ও বোর্ড কতৃক অনুমদিত ব্যবস্থাপনা কমিটির মাধ্যমে পরিচালিত হচ্ছে। পর্যায়ক্রমে 
              নতুন টেকনোলজি সংযোজন ও আসন বৃদ্ধির ফলে বর্তমানে সিভিল (১৮০), ইলেকট্রিক্যাল
              (১৮০), ইলেকট্রনিক্স (৬০), কম্পিউটার (১২০), মেকানিক্যাল (৬০), টেক্সটাইল (১৮০), 
              গার্মেন্টস ডিজাইন এন্ড প্যাটার্ন মেকিং (৬০) সর্বমোট ৮৪০টি আসনে প্রতি শিক্ষাবর্ষে শিক্ষার্থীরা 
              ভর্তির সুযোগ পায়। শিক্ষার্থীদের প্রাতিষ্ঠানিক শিক্ষার পাশাপাশি সহশিক্ষা যেমনঃ রাষ্টীয় ও জাতীয়
              দিবস পালন, সাংস্কৃতিকচর্চা, খেলাধূলা, বিতর্ক প্রতিযোগিতা ও শুদ্ধাচারের মাধ্যমে শিক্ষার্থীদের 
              আর্দশ মানুষ হিসেবে গড়ে তুলার ভূমিকা পালন করছে।
            </p>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <img src="{{url('admin/assets/images/introduction.png')}}" class="img-fluid" alt="" />
          </div>
        </div>
        <hr>
        <div class="row mt-2 py-5 align-items-center">
          <div class="col-lg-3">
            <img src="{{url('admin/assets/images/opportunities.png')}}" style="height: 380px; width:100%" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-8 offset-lg-1">
            <h3 class="fw-normal">সুযোগ-সুবিধা</h3>
            <div class="mt-4">
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                যুগোপযোগী টেকনোলজি ভিত্তিক ল্যাব ও ওয়ার্কশপ সমূহের আধুনিকরণের জন্য যন্ত্রপাতি ক্রয়।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 শিক্ষার্থীদের দক্ষতা বৃদ্ধির জন্য শিল্প কারখানায় বাস্তব প্রশিক্ষণ ও চাকুরী ব্যবস্থাকরণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 বিভিন্ন শিল্প কারখানায় দক্ষ ও অভিজ্ঞ ইঞ্জিনিয়ারগণকে শিক্ষার্থীদের বাস্তব জ্ঞান বৃদ্ধির জন্য গেস্ট লেকচারার হিসাবে নিয়োজিতকরণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 শিক্ষার্থীদের উন্নত শিক্ষার জন্য শিক্ষকগণের দেশে ও বিদেশে প্রশিক্ষণের ব্যাবস্থাকরণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 দক্ষ ও অভিজ্ঞ ইঞ্জিনিয়ার, কৃতি শিক্ষাবিদ, শিল্পোদ্যোগক্তাদের মাধ্যমে সেমিনার সিস্পোজিয়ামের ব্যবস্থা দ্বারা শিক্ষার্থীদের প্রযুক্তিগত জ্ঞান ও ধারণা বৃদ্ধি করা হয়।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                  RIIT এর দরিদ্র ও মেধাবী শিক্ষার্থীগণ  প্রতি পর্বে ৪০০০ টাকা বৃত্তি পাবে।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 সর্বোচ্চ সংখ্যক তাত্ত্বিক ও ব্যবহারিক ক্লাশের নিশ্চয়তা।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 ক্লাশে শতভাগ উপস্থিতির লক্ষ্যে বিভিন্ন কৌশল নির্ধারণ ও সার্বক্ষণিক অভিভাবকদের  ​​​​​​​সঙ্গে মতবিনিময়।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 হ্যান্ড নোট সহ অতিরিক্ত বিশেষ ক্লাশের ব্যবস্থা আছে, যার ফলে প্রাইভেট পড়ার প্রয়োজন হয় না।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 শিক্ষার্থীদের তত্তাবধানের জন্য গাইড শিক্ষকের ব্যবস্থা।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 মাল্টিমিডিয়া প্রজেক্টের মাধ্যমে ক্লাস গ্রহণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 ডাটাবেজ সফটওয়্যারের মাধ্যমে উপস্থিতি ফলাফলসহ প্রতিষ্ঠানের যাবতীয় তথ্যাদি ছাত্র-ছাত্রী ও অভিভাবকদের সহজে অবিহতকরণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 মহিলা শিক্ষার্থীদের আলাদা কমনরুম ও মহিলা গাইড শিক্ষকের ব্যবস্থা।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 এর মাধ্যমে ছাত্র/ছাত্রীরা প্রয়োজনীয় সময়ে ইন্টারনেট ব্যবহার করার সুবিধা।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 সম্পূর্ণ ক্যাম্পাস সিসি ক্যামেরার মাধ্যমে মনিটরিংকরণ।
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i>
                 কোর্স শেষে প্লেসমেন্ট সেলের মাধ্যমে কর্মসংস্থানের সহায়তা করা।
              </p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row pb-3 pt-5 align-items-center">
          <div class="col-lg-6">
            <h3 class="fw-normal">Md. Shakinur Alam</h3>
            <h6>Head of the Institute</h6>
            <p class="text-muted mt-3">
              The simplest and fastest way to build dashboard or admin panel.
              Hyper is built using the latest tech and tools and provide an easy
              way to customize anything, including an overall color schemes,
              layout, etc.
            </p>

            <div class="mt-4">
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Email :</strong>
                shakinuralam@gmail.com
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Phone :</strong>
                +8801823145454
              </p>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 text-end">
            <img src="{{url('admin/assets/images/users/principal.jpg')}}" class="img-fluid rounded border border-4" style="max-height: 300px" alt="">
          </div>
        </div>
        <div class="row mt-2 py-5 align-items-center">
          <div class="col-lg-5">
            <img src="{{url('admin/assets/images/users/director.jpg')}}" class="img-fluid rounded border border-4" style="max-height: 300px" alt="">
          </div>
          <div class="col-lg-6 offset-lg-1">
            <h3 class="fw-normal">Abu Hena Md.Mostofa Kamal</h3>
            <h6>Director</h6>
            <p class="text-muted mt-3">
              The simplest and fastest way to build dashboard or admin panel.
              Hyper is built using the latest tech and tools and provide an easy
              way to customize anything, including an overall color schemes,
              layout, etc.
            </p>

            <div class="mt-4">
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Email :</strong>
                shakinuralam@gmail.com
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Phone :</strong>
                +88018231****
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- END FEATURES 2 -->
@endsection
