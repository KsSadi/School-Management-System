<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ID Card</title>

    <style>

        .wrap {
            width: 400px;
            height: 600px;
            background-color: #f3f3f3;
            overflow: hidden;
            background-size: contain;
            background-repeat: no-repeat;
            float: left;

        }


        .profile-info {
            position: absolute;
            display: inline-block;
            top: 32%;
            margin: auto;
            left: 26%;
        }

        h1 {
            text-align: center;
            color: #022c52;
        }


        .c-info div {
            display: inline-block;
        }

        .blue-text {
            color: #022c52;
        }

        .text-c {
            font-weight: 700;
        }

        .mb-minus {
            margin-bottom: -19px;
        }

        .scan-picture {
            width: 100%;
            position: absolute;
            height: 175px;
            background-image: url(https://www.tekportal.net/wp-content/uploads/2018/11/scan-1.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            bottom: 50px;
        }



        .web-address p {
            text-align: center;
            color: white;
        }

        /* back part */
        .yello-bg {
            position: absolute;
            top: 0;
            width: 100%;
            background: #997902;
            height: 40px;
        }
        .web-address {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: #022c52;
            height: 30px;
            padding: 0;

        }




        .description p {
            text-align: center;
        }

        .description span {
            text-align: center;
        }


        .contactinfo-p p {
            display: inline-block;
        }


        .red-text {
            color: #6d2b27;
        }

        a {
            color: #344347;
            text-decoration: none;
        }

        .bangla {
            font-family: 'nikosh', nikosh;
        }

        .logo-police {
            position: absolute;
            width: 100%;
            height: 150px;
            overflow: hidden;

            background-size: contain;
            background-repeat: no-repeat;

            background-position: center;
        }

        .signature {
            position: absolute;
            width: 100%;
            height: 40px;
            overflow: hidden;

            background-size: contain;
            background-repeat: no-repeat;

            background-position: center;

        }


    </style>
</head>
<body>
@foreach ($serviceProviders as $serviceProvider)
    <style>
        @page {
            sheet-size: A3;
        }

        .profile_img {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 150px;
            border-style: solid;
            border-color: white;
            border-width: 10px;

            overflow: hidden;

            background-size: contain;
            background-repeat: no-repeat;

            background-position: center;
        }
    </style>


    <div class="front">
        <div class="wrap" >
            <div style=" padding: 5px;margin: 0 5px;">


            <div>
                <div style="float: right; width: 25%;margin-top: 1rem">
                    <img src="{{public_path('images/logo.png')}}"
                         style="
                 height: 200px;
                 padding: 5px;
                 width: 105%"
                         alt=""
                    >
                </div>
                <div style="clear: both">
                </div>


                <div class="profile_img"
                     style="margin: 0 auto;margin-top: -40px; background-image: url({{public_path('uploads/serviceProvider/'.$serviceProvider->image)}});"></div>


            </div>
            <div class="profile-info " style="text-align: center">
                <span style="text-align: center;font-weight: bold;font-size: 2rem"
                      class="bangla">{{$serviceProvider->name}}</span>
                <div class=" bangla" style="text-align: center">
                <span style="background: #022c52;color: white;font-size: 2rem;">
                    &nbsp; {{$serviceProvider->category->name}}  &nbsp;
                </span>
                </div>

                <table class="bangla" style="width: 100%">
                    <tr>
                        <td style="text-align: right;width: 50%">
                            আইডি :
                        </td>
                        <td style="text-align: left;width: 50%">
                            {{$serviceProvider->id}}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 50%">
                            ফোন নাম্বার :
                        </td>
                        <td style="text-align: left;width: 50%">
                            {{$serviceProvider->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 50%">
                            রক্তের গ্রুপ :
                        </td>
                        <td style="text-align: left;width: 50%">
                            {{$serviceProvider->blood}}
                        </td>
                    </tr>
                </table>

            </div>
            <div class="logo-police"
                 style="margin: 0 auto;background-image: url('https://cdn.postsrc.com/WJvvDgRPTUWt9teL295LuMcejAbc7rrIRCcKKPXb.png');"></div>


        </div>
            <div class="web-address" style="text-align: center;color: white; margin-top: 29px;" >  <span style="margin-top: 15px"> WWW.GOBANGLA.XYZ</span></div>
        </div>

    </div>
    <div class="back" style="margin-top: 13px;padding: 0;">

        <div class="wrap bangla" >

            <div class="yello-bg" ></div>
            <div style=" padding: 5px;margin: 0 5px;background: white;">

            <div class="logo-police"
                 style="margin: 0 auto;background-image: url({{public_path('images/GB-ID-Card.png')}});"></div>
            <div class=" bangla" style="text-align: center">
                <span>এই কার্ডটি স্থানান্তরযোগ্য নয়।</span> <br>
                <span>কেউ খুজে পাইলে নিচের ঠিকানায় প্রদান করার অনুরোধ রইলো-</span> <br>
                <span class="text-c"
                >লাবণী পয়েন্ট ,কক্সবাজার সদর, চট্টগ্রাম বাংলাদেশ ।</span
                >
            </div>

            <div class="signature"
                 style="margin: 0 auto;background-image: url({{public_path('images/Signature.png')}});"></div>
            <div style="text-align: center;border-top: solid 1px rgba(0,0,0,0.58);padding: 5px 42px;margin-top: 5px;">

                Authorised Signature
            </div>
            <div class="">

                <div class="" style="text-align: center;background: white">
                    <p class="text-c">নিরাপদ ভ্রমণে ট্যুরিস্ট পুলিশের সহায়তা নিন</p>
                    <span>
                    প্রয়োজনে - ০১৩২০-১৫৯০৮৭
                </span>
                </div>
                <p class="text-c " style="text-align: center">
                    জরুরী সেবা <span class="red-text text-c"
                                     style="color: red;font-size: 1.5rem;font-weight: bold"> ৯৯৯</span>
                    <br>
                    <a href="">www.tourist.police.gov.bd</a>
                </p>

            </div>

            </div>
            <div class="web-address" style="color: white;width: 400px;margin-top: 61px">

            </div>
        </div>

    </div>
    <!-- Clearfix -->
    <div style="clear: both"></div>

@endforeach
</body>
</html>
