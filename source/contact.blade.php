---
extends: _layouts.page
title: Contact Us
meta_description:
---

@section('content')
    <div class="uk-section uk-section-default" id="contact">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <h3>We would love to hear from you</h3>
                    <p>We are happy to consult for you, discuss new/existing projects. <br><br> Even better, you can just say Hi.</p>
                    <h4><strong>Office Location:</strong> IHub Nairobi - 6th floor Senteu Plaza, Galana / Lenana Road, Nairobi</h4>
                    <h4><strong>Email: </strong> <br>
                        sales@centrisign.africa<br>
                        info@centrisign.africa<br></h4>
                    <h4><strong>Phone: </strong> +254 727 357 218<br></h4>
                </div>
                <div class="uk-width-1-2">
                    <div class="mapouter"><div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=senteu%20plaza&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                        <style>
                            .mapouter{text-align:right;height:500px;width:600px;}
                            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection