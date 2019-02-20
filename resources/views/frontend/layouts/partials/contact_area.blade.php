<section id="contact-area" class="contact-area-section backgroud-style">
    <div class="container">
        <div class="contact-area-content">
            <div class="row">
                @if(config('contact_data') != "")
                    @php
                        $contact_data = contact_data(config('contact_data'));
                    @endphp
                    <div class="col-md-6">
                        <div class="contact-left-content ">
                            <div class="section-title  mb45 headline text-left">
                                <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                                <h2><span>Get in Touch</span></h2>
                                <p>
                                    {{ $contact_data["short_text"]["value"] }}
                                </p>
                            </div>

                            <div class="contact-address">
                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            @if($contact_data["primary_address"]["status"] == 1)
                                                <li>
                                                    <span>Primary: </span>{{$contact_data["primary_address"]["value"]}}
                                                </li>
                                            @endif

                                            @if($contact_data["secondary_address"]["status"] == 1)
                                                <li>
                                                    <span>Second: </span>{{$contact_data["secondary_address"]["value"]}}
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            @if($contact_data["primary_phone"]["status"] == 1)
                                                <li>
                                                    <span>Primary: </span>{{$contact_data["primary_phone"]["value"]}}
                                                </li>
                                            @endif

                                            @if($contact_data["secondary_phone"]["status"] == 1)
                                                <li>
                                                    <span>Second: </span>{{$contact_data["secondary_phone"]["value"]}}
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="contact-address-details">
                                    <div class="address-icon relative-position text-center float-left">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="address-details ul-li-block">
                                        <ul>
                                            @if($contact_data["primary_email"]["status"] == 1)
                                                <li>
                                                    <span>Primary: </span>{{$contact_data["primary_email"]["value"]}}
                                                </li>
                                            @endif

                                            @if($contact_data["secondary_email"]["status"] == 1)
                                                <li>
                                                    <span>Second: </span>{{$contact_data["secondary_email"]["value"]}}
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                            <a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                    @if($contact_data["location_on_map"]["status"] == 1)
                        <div class="col-md-6">
                            <div id="contact-map" class="contact-map-section">
                                {!! $contact_data["location_on_map"]["value"] !!}
                            </div>
                        </div>
                    @endif
                @else
                    <h4>Please enter data from backend.</h4>
                @endif
            </div>
        </div>
    </div>
</section>
