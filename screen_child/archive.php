<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>




   <main>

            
            
            <!-- half hero img right-->
            <section class="section split-hero-section hero white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="content-grid split-hero ">                                
                                <!--  -->
                                <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-content">
                                        <div class="split-hero-content-item">
                                            <div class="split-hero-content-inner">
                                                <h1 class="split-hero-title">Blog Archive</h1>
                                                <h2 class="split-hero-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>

                                            </div>
                                            <!-- <a href="#" class="button mono">Learn More</a> -->
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <!-- <div class="content-grid-item content-grid-item--2-col">
                                    <div class="split-hero-image image-wrap">
                                        <img src="assets/images/placeholder.png" alt="product placeholder" class="sample-image">
                                    </div>
                                </div> -->
                                <!--  -->
                            </div>
                        </div>
                    </div>
                
                    
                </div>

            </section>



            <!-- blog horiz -->
            <section class="section biog-horiz-section ">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text">Blog</h4>                            
                                <h2>Lorem Ipsum</h2>
                            </div>
                                
                        </div>
                        <div class="column">

                            <div class="section-filter">
                                <select id="filter-select" class="custom-select " >
                                    <option value="" >Filter</option>
                                    <option value="category-01">Category 01</option>
                                    <option value="category-02">Category 02</option>
                                    <option value="category-03">Category 03</option>
                                    <option value="category-04">Category 04</option>
                                </select>
                                <form>
                                    <!-- search -->
                                    <div class="search-field">
                                        <input type="text" id="search" placeholder="Search..." class="search-input">
                                        <button type="submit" class="search-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                                                <path fill="#121212" d="m14.96 13.54-3.09-3.09c.71-1.09 1.14-2.42 1.14-3.95 0-3.73-2.77-6.5-6.5-6.5S0 2.77 0 6.5 2.77 13 6.5 13c1.53 0 2.86-.42 3.95-1.14l3.09 3.09c.2.2.45.29.71.29.26 0 .51-.1.71-.29a.996.996 0 0 0 0-1.41ZM6.5 10.75c-2.43 0-4.25-1.82-4.25-4.25 0-2.43 1.82-4.25 4.25-4.25 2.43 0 4.25 1.82 4.25 4.25 0 2.43-1.82 4.25-4.25 4.25Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            <!--  -->
                                <!-- 
                                    <button class="filter" >Category</button>
                                    <button class="filter selected" >Category 02</button>
                                    <button class="filter" >Category 03</button>
                                    <button class="filter" >Category 04</button> 
                                -->
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">
                                    
                                    <div class="blog-card ">
                                        <div class="blog-card-image">
                                            <img src="assets/images/placeholder.png" alt="blog: Name" class="blog-image">
                                        </div>
                                        <div class="blog-card-content">
                                            <div class="blog-card-heading">
                                                <h4 class="blog-card-title">Blog Title</h4>
                                                <div class="blog-card-org">Organisation / Employer</div>
                                            </div>
                                            <div class="blog-card-text">
                                                <div class="blog-text">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus amet minus dolorem labore fugit veritatis quia modi, impedit itaque in repellendus eveniet praesentium corrupti similique cupiditate adipisci nisi temporibus.</p>
                                            </div>
                                            
                                            <a class="button mono" href="./single-post-image.html">Read More</a>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="blog-card ">
                                        <div class="blog-card-image">
                                            <img src="assets/images/placeholder.png" alt="blog: Name" class="blog-image">
                                        </div>
                                        <div class="blog-card-content">
                                            <div class="blog-card-heading">
                                                <h4 class="blog-card-title">Blog Title</h4>
                                                <div class="blog-card-org">Organisation / Employer</div>
                                            </div>
                                            <div class="blog-card-text">
                                                <div class="blog-text">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus amet minus dolorem labore fugit veritatis quia modi, impedit itaque in repellendus eveniet praesentium corrupti similique cupiditate adipisci nisi temporibus.</p>
                                            </div>
                                            
                                            <a class="button mono" href="./single-post-image.html">Read More</a>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="blog-card ">
                                        <div class="blog-card-image">
                                            <img src="assets/images/placeholder.png" alt="blog: Name" class="blog-image">
                                        </div>
                                        <div class="blog-card-content">
                                            <div class="blog-card-heading">
                                                <h4 class="blog-card-title">Blog Title</h4>
                                                <div class="blog-card-org">Organisation / Employer</div>
                                            </div>
                                            <div class="blog-card-text">
                                                <div class="blog-text">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus amet minus dolorem labore fugit veritatis quia modi, impedit itaque in repellendus eveniet praesentium corrupti similique cupiditate adipisci nisi temporibus.</p>
                                            </div>
                                            
                                            <a class="button mono" href="./single-post-image.html">Read More</a>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="blog-card ">
                                        <div class="blog-card-image">
                                            <img src="assets/images/placeholder.png" alt="blog: Name" class="blog-image">
                                        </div>
                                        <div class="blog-card-content">
                                            <div class="blog-card-heading">
                                                <h4 class="blog-card-title">Blog Title</h4>
                                                <div class="blog-card-org">Organisation / Employer</div>
                                            </div>
                                            <div class="blog-card-text">
                                                <div class="blog-text">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus amet minus dolorem labore fugit veritatis quia modi, impedit itaque in repellendus eveniet praesentium corrupti similique cupiditate adipisci nisi temporibus.</p>
                                            </div>
                                            
                                            <a class="button mono" href="./single-post-image.html">Read More</a>
                                            </div>
                                        </div>                                    
                                    </div>

                                    
                                    


                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">

                            <div class="pagination">
                                <ul class="pagination-list">
                                    <li class="pagination-item"><a class="pagination-link previous disabled" href="#">&lang;</a></li>
                                    <li class="pagination-item"><a class="pagination-link" href="#">1</a></li>
                                    <li class="pagination-item"><a class="pagination-link" href="#">2</a></li>
                                    <li class="pagination-item"><a class="pagination-link" href="#">3</a></li>
                                    <li class="pagination-item"><a class="pagination-link" href="#">4</a></li>
                                    <li class="pagination-item"><a class="pagination-link" href="#">5</a></li>
                                    <li class="pagination-item"><a class="pagination-link next" href="#">&rang;</a></li>
                                </ul>
                            </div>      

                        </div>
                    </div>                                    
                </div>
            </section>



            <!-- upcoming -->
             <section class="section standard-section upcoming-program-section  white-bg">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="section-heading-wrap">
                                <h4 class="primary-text">Upcoming Programs</h4>
                            </div>
                            <div class="standard-text">
                                <p>Other programs listed below, and a calendar of all upcoming programs <a href="">here</a></p>
                            </div>
                                
                        </div>
                    </div>
                    <div class="row">

                        <div class="column">

                           <div class="column_inner">

                                <div class="carousel program_carousel">
                                    
                                    <!-- 01 -->
                                    <div class="carousel-cell product-card upcoming-product-card">
                                        <div class="product-card-image">
                                            <img src="assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="./product.html" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>
                                   
                                    <!-- 02 -->
                                    <div class="carousel-cell product-card upcoming-product-card">
                                        <div class="product-card-image">
                                            <img src="assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="./product.html" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>

                                    <!-- 03 -->
                                    <div class="carousel-cell product-card upcoming-product-card">
                                        <div class="product-card-image">
                                            <img src="assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="./product.html" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>

                                    <!-- 04 -->
                                    <div class="carousel-cell product-card upcoming-product-card">
                                        <div class="product-card-image">
                                            <img src="assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="./product.html" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>

                                    <!-- 05 -->
                                    <div class="carousel-cell product-card upcoming-product-card">
                                        <div class="product-card-image">
                                            <img src="assets/images/placeholder.png" alt="Card Image" class="sample-image">
                                        </div>
                                        <div class="product-card-content">
                                            <h3 class="product-card-title">Program Title</h3>
                                            <div class="product-card-text">
                                                <div class="product-duration">Duration: </div>
                                                <div class="product-date">Date of program: </div>
                                                <div class="product-who">Who it's for: </div>
                                                <div class="product-category">Category: </div>
                                                <div class="product-overview">Overview: Lorem ipsum dolor sit amet, consectetur </div>
                                                <div class="product-cost">$Cost</div>
                                            </div>
                                            <a href="./product.html" class="link-only">Book Now</a>
                                        </div>                                    
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div> 
                    

                </div>
            </section>

            <!-- contact -->
            <section class="section contact-section">
                <div class="container">
                    <div class="row">
                        <div class="column">
                            
                            <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">
                                        <div class="column-content-inner">
                                            <div class="standard-heading">
                                                <h4 class="standard-subtitle primary">Contact Us</h4>
                                                <h2 class="title">Get Involved</h2>
                                            </div>
                                            <div class="standard-text">
                                                <p class="body-1">If you’d like to find out more about the DYG, or be involved in some way please get in touch.</p>
                                                <p class="body-3">Lorem ipsum dolor sit amet consectetur. Ultricies elementum bibendum id massa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </div>

                        <div class="column">

                            <div class="content-grid-item content-grid-item--2-col">
                                <div class="column-content">
                                    <div class="column-content-item">

                                        <div class="form_wrap">
                                        <form>
                                
                                            <div class="form-group">
                                                <label class="required" for="name">Name:</label>
                                                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                                <div id="error" class="error-msg">Error Message visible.</div>

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Select:</label>
                                                <select id="email" name="email" required class="custom-select">
                                                    <option value="" disabled selected>Select your email provider</option>
                                                    <option value="gmail">Gmail</option>
                                                    <option value="yahoo">Yahoo</option>
                                                    <option value="outlook">Outlook</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                                            </div>
                                            <div class="form-group checkbox-group">
                                                
                                                <input type="checkbox" id="tsandcs" name="vehicle1" value="agree" required>
                                                <label for="tsandcs">I agree to your <a href="#t&cs"></a>terms and conditions</a>.</label>
                                            </div>

                                            <button type="submit" class="button-medium primary">Submit</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                                    
                </div>
            </section>
            

        </main>





<?php

get_footer();
