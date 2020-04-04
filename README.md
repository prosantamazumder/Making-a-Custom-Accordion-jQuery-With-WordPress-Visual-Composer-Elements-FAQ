# Making a Custom Accordion jQuery

**Live Demo**
[repositories.presstechit-institute.com](http://repositories.presstechit-institute.com/Making-a-Custom-Accordion-jQuery-With-WordPress-Visual-Composer-Elements-FAQ/)


###  Accordion HTML Markup 

```
<ul class="accordion-box mt-20">
  <!--Block-->
  <li class="accordion block active-block">
      <div class="acc-btn active">
        <div class="icon-outer">
          <span class="icon fa-plus fa fa-plus"></span>
          <span class="icon fa-minus fa fa-minus"></span>
        </div>#1 Questions
      </div>
      <div class="acc-content current" style="display: block;">
          <div class="content">
              <div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum adipisci dolores dolorum autem consequatur ducimus! Asperiores accusantium similique vel nihil nulla veritatis neque fugiat soluta, rem temporibus quos quia minus!
    </div>
          </div>
      </div>
  </li>

  <!--Block-->
  <li class="accordion block">
      <div class="acc-btn">
        <div class="icon-outer">
          <span class="icon fa-plus fa fa-plus"></span>
          <span class="icon fa-minus fa fa-minus"></span>
        </div>#2 Questions
      </div>
      <div class="acc-content  " style="display: none;">
          <div class="content">
              <div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum adipisci dolores dolorum autem consequatur ducimus! Asperiores accusantium similique vel nihil nulla veritatis neque fugiat soluta, rem temporibus quos quia minus!
    </div>
          </div>
      </div>
  </li>

  <!--Block-->
  <li class="accordion block">
      <div class="acc-btn">
        <div class="icon-outer">
          <span class="icon fa-plus fa fa-plus"></span>
          <span class="icon fa-minus fa fa-minus"></span>
        </div>#3 Questions
      </div>
      <div class="acc-content  " style="display: none;">
          <div class="content">
              <div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum adipisci dolores dolorum autem consequatur ducimus! Asperiores accusantium similique vel nihil nulla veritatis neque fugiat soluta, rem temporibus quos quia minus!
    </div>
          </div>
      </div>
  </li>

  <!--Block-->
  <li class="accordion block">
      <div class="acc-btn">
        <div class="icon-outer">
          <span class="icon fa-plus fa fa-plus"></span>
          <span class="icon fa-minus fa fa-minus"></span>
        </div>#4 Questions
      </div>
      <div class="acc-content  " style="display: none;">
          <div class="content">
              <div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum adipisci dolores dolorum autem consequatur ducimus! Asperiores accusantium similique vel nihil nulla veritatis neque fugiat soluta, rem temporibus quos quia minus!
    </div>
          </div>
      </div>
  </li>

  <!--Block-->
  <li class="accordion block">
      <div class="acc-btn">
        <div class="icon-outer">
          <span class="icon fa-plus fa fa-plus"></span>
          <span class="icon fa-minus fa fa-minus"></span>
        </div>#5 Questions
      </div>
      <div class="acc-content  " style="display: none;">
          <div class="content">
              <div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum adipisci dolores dolorum autem consequatur ducimus! Asperiores accusantium similique vel nihil nulla veritatis neque fugiat soluta, rem temporibus quos quia minus!
    </div>
          </div>
      </div>
  </li>
</ul>
```


### Accordion Box JS ADD THIS CODE MAIN.JS FIELS

```
  if($('.accordion-box').length){
      $(".accordion-box").on('click', '.acc-btn', function() {

          var outerBox = $(this).parents('.accordion-box');
          var target = $(this).parents('.accordion');

          if($(this).hasClass('active')!==true){
              $(outerBox).find('.accordion .acc-btn').removeClass('active');
          }

          if ($(this).next('.acc-content').is(':visible')){
              return false;
          }else{
              $(this).addClass('active');
              $(outerBox).children('.accordion').removeClass('active-block');
              $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
              target.addClass('active-block');
              $(this).next('.acc-content').slideDown(300);    
          }
      }); 
  }
```

### Ask Any Question or if you need help contact me 24/7 we are ready support team.

[Facebook:](https://www.facebook.com/PMPROSANTA0)<br />
[Web:](http://presstechit-institute.com/)\
[Personal:](http://pm-prosanto.themefusions.com/)\
[Email Me:](mailto:prosantomazumder@gmail.com)\
[Linkedin:](https://www.linkedin.com/in/prosantomazumder/)\
[Twitter:](https://twitter.com/prosantomazumd1)\
[Instagram:](https://www.instagram.com/prosantomazumder/)\
[Codepen:](https://codepen.io/ProsantaMazumder)


### Changelog
- [x] Version 1.0.3

##### Cradit
[Bootstrap](https://getbootstrap.com/)
[FontAwesome](https://fontawesome.com/v4.7.0/)


