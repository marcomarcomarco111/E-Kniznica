<?php
require_once 'config.php';
require_once __DIR__ . '/parts/header.php';
require_once __DIR__ . '/parts/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
<nav class="bottom-navbar">
    <a href="index.php" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Až 40% zľavy!</h3>

            <a href="#arrivals" class="btn">Nakupujte</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="book.php?id=1" class="swiper-slide"><img src="image/book-1.jpg" alt=""style="height: 22rem; "></a>
                <a href="book.php?id=2" class="swiper-slide"><img src="image/book-2.jpg" alt=""style="height: 22rem; "></a>
                <a href="book.php?id=3" class="swiper-slide"><img src="image/book-3.jpg" alt=""style="height: 22rem;"></a>
                <a href="book.php?id=4" class="swiper-slide"><img src="image/book-4.jpg" alt=""style="height: 22rem;"></a>
                <a href="book.php?id=5" class="swiper-slide"><img src="image/book-5.jpg" alt=""style="height: 22rem;"></a>
                <a href="book.php?id=6" class="swiper-slide"><img src="image/book-6.jpg" alt=""style="height: 22rem;"></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ends  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons" >
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>Poštovné zdarma!</h3>
            <p>pre objednávky nad 100€</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>Bezpečná platba!</h3>
            <p>Dobierka aj online</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Jednoduché vrátenie tovaru!</h3>
            <p>Alebo možná výmena</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>Dostupnosť poradcov!</h3>
            <p>Mobil alebo email</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Vystavené knihy</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=1" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zločin a Trest</h3>
                    <div class="price">13.99€ <span>21.99€</span></div>
                    <a href="#" class="btn">Pridať do košika</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=2" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Atómové návyky</h3>
                    <div class="price">12.99€ <span>18.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=3" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>No longer human</h3>
                    <div class="price">14.99€ <span>21.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=4" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Secret History</h3>
                    <div class="price">15.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=5" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tak vravel Zarathursta</h3>
                    <div class="price">11.99€ <span>17.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=6" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Blood Meridian</h3>
                    <div class="price">13.99€ <span>20.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=7" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Psychológia penazí</h3>
                    <div class="price">13.99€ <span>19.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=8" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Alchymista</h3>
                    <div class="price">11.99€ <span>18.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=9" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Vladár</h3>
                    <div class="price">13.99€ <span>17.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=10" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Stranger</h3>
                    <div class="price">10.99€ <span>17.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>


            <!-- Testovaci box s knihou na edit a zmazanie-->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book.php?id=20" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Test Kniha</h3>
                    <div class="price">10.99€ <span>17.99€</span></div>
                    <a href="#" class="btn">Pridať do košíka</a>
                </div>
            </div>
            <!--                                            -->

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form id="newsletter-form">
        <h3>Odoberajte náš newsletter pre dalšie novinky!</h3>
        <input type="email" name="email" placeholder="Zadajte váš email" id="email" class="box" required>
        <input type="submit" value="Odoberať" class="btn" id="submit-btn">
    </form>

</section>


<!-- newsletter section ends -->



<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>Novinky</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="book.php?id=1" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zločin a Trest</h3>
                    <div class="price">13.99€ <span>21.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=2" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Atómové návyky</h3>
                    <div class="price">12.99€ <span>18.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=3" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>No longer Human</h3>
                    <div class="price">14.99€ <span>21.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=4" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Secret History</h3>
                    <div class="price">15.99€ <span>24.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=5" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tak vravel Zarathursta</h3>
                    <div class="price">11.99€ <span>17.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="book.php?id=6" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Blood Meridian</h3>
                    <div class="price">13.99€ <span>20.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=7" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Psychológia peňazí</h3>
                    <div class="price">13.99€ <span>19.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=8" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Alchymista</h3>
                    <div class="price">11.99€<span>19.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=9" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Vladár</h3>
                    <div class="price">13.99€ <span>17.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="book.php?id=10" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Stranger</h3>
                    <div class="price">10.99€ <span>17.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>Ponuka dňa</h3>
        <h1>až 40% zľavy!</h1>
        <a href="#arrivals" class="btn">Nakupujte</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Recenzie Klientov</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>Samuel Baťo</h3>
                <p>Výborné knihy , výborné ceny!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>Katarína Sklárska</h3>
                <p>Celá rodina kupuje knihy od Bookly.sk , sme veľmi spokojný.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>Lukáš Horvát</h3>
                <p>Skvelé ceny!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Elena Gilbert</h3>
                <p>Odporúčam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>Samuel Gál</h3>
                <p>Milujem knihy ale ešte viac milujem php</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>Yen Cho</h3>
                <p>Odporúčam všetky knihy čo majú na Eshope , naozaj skvelé!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="https://freewebsitecode.com/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="https://freewebsitecode.com/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="https://freewebsitecode.com/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="https://freewebsitecode.com/" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="https://freewebsitecode.com/" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- footer section starts  -->
<?php require_once 'parts/footer.html'; ?>
<!-- footer section ends -->

</body>
</html>