
        <!-- slide -->
        
        <!-- about us -->
        <!-- <homeAbout/> -->
        <!-- services -->
        <!-- fan fact -->
        <!-- get quote -->
        <!-- latest news -->
        <!-- section -->



 
  
<template>
    <div>
        

                         
                 <!-- navbar -->
                <header>
                    <nav class="nav-wrapper transparent">
                    <div class="container">
                        <a href="#" class="brand-logo"> Claim Paul<i class="small material-icons">insert_chart</i></a>
                        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                        <li><router-link to="">Home</router-link></li>
                        <li><router-link to="/about">About us</router-link></li>
                        <li><router-link to="/contact">contact</router-link></li>
                        <li><router-link to="/services">Services</router-link></li>
                        <li><router-link to="/faq">FAQ</router-link></li>
                         <li>    
                       <div class="center row">
                          <div class="col s12 " >
                            <div class="row" id="topbarsearch">
                              <div class="input-field col s6 s12 white-text">
                                <i class="green-text material-icons prefix">search</i>
                                <input type="text" placeholder="search" id="autocomplete-input" class="autocomplete white-text" >
                                </div>
                              </div>
                            </div>
                          </div>          
                      </li>      
                        <!-- <li><a href="#" class="tooltipped btn-floating btn-small indigo darken-4" data-position="bottom" data-tooltip="Instagram"> 
                            <i class="fab fa-instagram"></i>
                        </a></li>
                        <li><a href="#" class="tooltipped btn-floating btn-small indigo darken-4" data-position="bottom" data-tooltip="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a></li>
                        <li><a href="#" class="tooltipped btn-floating btn-small indigo darken-4" data-position="bottom" data-tooltip="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a></li> -->
                        </ul>
                        <ul class="sidenav grey lighten-2" id="mobile-menu">
                        <li><router-link to="">Home</router-link></li>
                        <li><router-link to="/about">About us</router-link></li>
                        <li><router-link to="/contact">contact</router-link></li>
                        <li><router-link to="/services.vue">Services</router-link></li>
                        <li><router-link to="/faq">FAQ</router-link></li>
                        </ul>
                    </div>
                    </nav>
                </header>

                <!-- photo / grid -->
                <section class="container section scrollspy" id="photos">
                    <div class="row">
                    <div class="col s12 l4">
                        <img src="./Pages/home/img/portrait.jpg" alt="" class="responsive-img materialboxed">
                    </div>
                    <div class="col s12 l6 offset-l1">
                        <h2 class="indigo-text text-darken-4">Portraits</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col s12 l4 offset-l1 push-l7">
                                <img src="./Pages/home/img/city.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="col s12 l6 offset-l1 pull-l5 right-align">
                                <h2 class="indigo-text text-darken-4">Cityscapes</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                            </div>      
                    </div>
                    <div class="row">
                            <div class="col s12 l4">
                                <img src="./Pages/home/img/nature.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            
                            <div class="col s12 l6 offset-l1">
                                <h2 class="indigo-text text-darken-4">Nature</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                            </div>
                    </div>
                </section>       
                <div class="container">
                   
                                 <cards/>
                                 <!-- <Parallax/> -->
                </div>

                 <!-- parallax -->
                

                <!-- contact form -->
                    <section class="section container scrollspy" id="contact">
                        <div class="row">
                        <div class="col s12 l5">
                            <h2 class="indigo-text text-darken-4">Get in Touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
                        </div>
                        <div class="col s12 l5 offset-l2">
                            <form>
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input type="email" id="email">
                                <label for="email">Your Email</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">message</i>
                                <textarea id="message" class="materialize-textarea" cols="20" rows="20"></textarea>
                                <label for="message">Your Message</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" id="date" class="datepicker">
                                <label for="date">Choose a date you need me for...</label>
                            </div>
                            <div class="input-field">
                                <p>Services required:</p>
                                <p>
                                <label>
                                    <input type="checkbox">
                                    <span>Photography</span>
                                </label>
                                </p>
                                <p>
                                <label>
                                    <input type="checkbox">
                                    <span>Photo Editing</span>
                                </label>
                                </p>
                            </div>
                            <div class="input-field center">
                                <button class="btn">Submit</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </section>

                     <footer class="page-footer grey darken-3">

                         <div class="container">
                             <div class="row">
                                <div class="col l6 s12">
                                    <h5>About Me</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                                </div>

                                <div class="col l4 offset-l2 s12">
                                    <h5 class="white-text">Connect</h5>
                                    <ul>
                                        <li><a class="grey-text text-lighten-3" href="#">Facebook</a></li>
                                        <li><a class="grey-text text-lighten-3" href="#">Twitter</a></li>
                                        <li><a class="grey-text text-lighten-3" href="#">Linked In</a></li>
                                        <li><a class="grey-text text-lighten-3" href="#">Instagram</a></li>
                                    </ul>
                                </div>
                             </div>

                             
                         </div>

                                <Footer/>
                     </footer>

            
                
  
  

       

    </div>
</template>

<script>
import cards from './Pages/home/cards'
import Parallax from './Pages/home/parallax'
import Footer from './footer'

export default {
    components:{Parallax,Footer,cards}
}
$(document).ready(function(){                 
$('input.autocomplete').autocomplete({
data: {
"Apple": null,
"Microsoft": null,
"Google": null,
"Gargle":null
}
});                
});
</script>

<style scoped>
    @import './Pages/home/home.css';

</style>



 
  
