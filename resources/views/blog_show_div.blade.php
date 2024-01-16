                                    @foreach ($post as $post_data)
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="#"><img src="{{ asset('assets/images/blog/'.$post_data->thumbnail) }}" alt="Image"></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#">{{ $post_data->category->category_name }}</a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                             {!! $post_data->details !!}
                                          
                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            
                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="mailer.php">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div> 
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn-part">
                                                           <a class="readon learn-more post" href="#">Post Comment</a>
                                                        </div> 
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach