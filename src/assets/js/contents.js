
document.addEventListener('DOMContentLoaded', function() {

  /* 要素の出現時のクラス */
  const classIsShow = 'is-show';
  /* 要素のスライド時のクラス */
  const classIsSlide = 'is-slide';

  /*SPのハンバーガーメニュー関連(定義)*/
  const _spHamburger = () => {

    /* SPスライドメニュー */
    const hamburger = document.querySelector('.c-hamburger');
    let slideGuard = true; //連打防止
    const headerInner = document.querySelector('.l-header__inner');
    const slideNav = document.querySelector('.l-slide-nav');
    const modal = document.querySelector('.c-modal');
    const hamburgerBar1 = document.querySelector('.c-hamburger__bar1');
    const hamburgerBar2 = document.querySelector('.c-hamburger__bar2');
    const hamburgerBar3 = document.querySelector('.c-hamburger__bar3');

    const spSlide = {
      slideIn: [
        hamburgerBar1,
        hamburgerBar2,
        hamburgerBar3,
        headerInner,
        slideNav,
        modal,
      ],
      slideOut: [
        slideNav,
        modal,
        hamburgerBar1,
        hamburgerBar2,
        hamburgerBar3,
      ],
      slideOutAfter: [
        headerInner,
        slideNav,
      ],
    }

    const _slideOutSp = () => { //スライドアウト時の処理関数
      slideGuard = false;
      const slideInStyle = new Promise(function(resolve) { //スライドアウト(先の処理)
        spSlide.slideOut.forEach((elem) => {
          elem.classList.remove(classIsSlide);
        });
        resolve();
      });

      slideInStyle.then(function(){ //スライドアウト(後の処理)
        setTimeout(function(){
          spSlide.slideOutAfter.forEach((elem) => {
            elem.classList.remove(classIsSlide);
          });
          slideGuard = true;
        }, 300);
      });
    }

    /*SPのハンバーガーメニューが押された時の挙動(スライド)*/
    const _slideInSp = () => {
      if (slideNav.classList.contains(classIsSlide) && slideGuard) { //スライドアウト
        _slideOutSp(classIsSlide);
      } else if (slideGuard) { //スライドイン
        slideGuard = false; //連打防止フラグ
        spSlide.slideIn.forEach((elem) => {
          elem.classList.add(classIsSlide);
        });
        setTimeout(function(){
          slideGuard = true;
        }, 300);
      }
    }

    /*ハンバーガーメニューがクリックされた時*/
    hamburger.addEventListener('click', function(){
      _slideInSp();
    });

    /*モーダルがクリックされた時*/
    modal.addEventListener('click', function(){
      _slideOutSp();
    });


    /*SPの検索フォームにフォーカスされると吹き出し(定義)*/
    const _showSpSearchTxtbox = () => {
      const headerSearchSpInput = document.querySelector('.l-header-search--sp input');
      const searchTtxtboxSp = document.querySelector('.l-search-txtbox--sp');

      headerSearchSpInput.addEventListener('focus', function(){ //フォーカスされた時
        searchTtxtboxSp.classList.add(classIsSlide);
        let slideNavscrollDis = window.pageYOffset; //フォーカスされた時のスクロール距離(縦)
      });

      headerSearchSpInput.addEventListener('blur', function(){ //フォーカスが外れた時
        searchTtxtboxSp.classList.remove(classIsSlide);
      });

      // headerSearchSpInput.addEventListener('focus', function(){ //フォーカスされた時(初回のみ)(iPhoneで初回のみキーボードが被る対策)
      //   window.scroll({
      //     top: 280,
      //     behavior: 'smooth'
      //   });
      // }, {once: true});
    }

    /*SPの検索フォームにフォーカスされると吹き出し(実行)*/
    _showSpSearchTxtbox();


    /*SPのスライドメニューの中のリンクのスクロール(定義)*/
    const _scrollSpSlideMenu = () => {
      
      const slideNav = document.querySelector('.l-slide-nav').firstElementChild;
      const slideNavScrollLink = slideNav.querySelectorAll('a');

      if (document.getElementById('page-scroll1') != null) { //#page-scroll1が存在していれば(TOPページであれば)スクロール
        slideNavScrollLink.forEach((elem, index) => {
          elem.addEventListener('click', function(event) {  //index番目のリンクがクリックされたら
            document.querySelector('.l-main').children[index].scrollIntoView({ //.l-main'の中のindex番目の子要素が上端までスクロール
              behavior: 'smooth',
              block: 'start',
              inline: 'center'
            });
            modal.classList.remove(classIsSlide);
            setTimeout(function(){
              _slideOutSp(); //スライドメニューを戻す
            }, 100);
            event.preventDefault();
          });
        });


      } else {  //#page-scroll1が存在していなければ(TOPページでなければ)ページ内リンク
      }
      
    }

    /*SPのスライドメニューの中のリンクのスクロール(実行)*/
    _scrollSpSlideMenu();

  }

  /*SPのハンバーガーメニュー関連(実行)*/
  _spHamburger();


  /*フッターのアコーディオン*/
  const footerLinkSp = document.querySelector('.l-footer-link--sp');
  const footerLinksSp = document.querySelector('.l-footer-links--sp');
  footerLinkSp.addEventListener('click', function(event){
    document.querySelector('.l-footer-links-accord--sp').classList.toggle('is-open');
    footerLinksSp.classList.toggle('is-open');
    event.preventDefault();
  });

  /*SPのフッターの中のリンクのスクロール(定義)*/
  const _scrollSpFooterMenu = () => {
    const footerLinksAccordSpLink = document.querySelectorAll('.l-footer-links-accord--sp a');
    if (document.getElementById('page-scroll1') != null) { //#page-scroll1が存在していれば(TOPページであれば)スクロール
      footerLinksAccordSpLink.forEach((elem, index) => {
        elem.addEventListener('click', function(event) {  //index番目のリンクがクリックされたら
          document.querySelector('.l-main').children[index].scrollIntoView({ //.l-main'の中のindex番目の子要素が上端までスクロール
            behavior: 'smooth',
            block: 'start',
            inline: 'center'
          });
          event.preventDefault();
        });
      });

    } else { //#page-scroll1が存在していなければ(TOPページでなければ)ページ内リンク
    }
  };

  /*SPのフッターの中のリンクのスクロール(実行)*/
  _scrollSpFooterMenu();

  /*ページ上部にスクロールするボタン(定義)*/
  const _topScrollBtn = () => {

    /*スクロール*/
    const toppageBtn = document.querySelector('.c-toppage-btn');
    toppageBtn.addEventListener('click', function(event){
      window.scroll({top: 0, behavior: 'smooth'});
      event.preventDefault();
    });

    /*1000pxスクロールすると、ページ上部にスクロールするボタンが現れる*/
    window.addEventListener('scroll', function () {
      let scrollDis = window.pageYOffset; //スクロール距離(縦)
      if (scrollDis > 1000) {
        toppageBtn.classList.add(classIsShow);
      } else {
        toppageBtn.classList.remove(classIsShow);
      }
  });

  }

  /*ページ上部にスクロールするボタン(実行)*/
  _topScrollBtn();


  /*PCのヘッダーのカテゴリー関連(定義)*/
  const _setPcHeaderCategory = () => {

    const headerCategoryTxtboxPc = document.querySelector('.l-header-category-txtbox--pc');
    const headerNavLinkTxtbox = document.querySelector('.l-header-nav__link--txtbox');
    const headerSearchTxtboxPc = document.querySelector('.l-header-search-txtbox--pc'); //PCのヘッダーのカテゴリーの吹き出し

    // /*PCのヘッダーのカテゴリーがホバーされたら吹き出しを出す*/
    headerNavLinkTxtbox.addEventListener('mouseover', function(event) {
      headerCategoryTxtboxPc.classList.add(classIsShow);
      headerSearchTxtboxPc.classList.remove(classIsShow); // カテゴリーの吹き出しは消す
    });

    headerNavLinkTxtbox.addEventListener('click', function(event) {
      event.preventDefault();
    });

    /*PCのヘッダーのカテゴリーの吹き出しの、閉じるボタンがクリックされたら*/
    const pcHeaderCategoryTxtboxClose = document.querySelector('.l-header-category-txtbox--pc .c-txtbox-closeBtn');
    pcHeaderCategoryTxtboxClose.addEventListener('click', function () {
      headerCategoryTxtboxPc.classList.remove(classIsShow); //PCのヘッダーのカテゴリーの吹き出しを消す
    });

    /*PCのヘッダーのカテゴリーの吹き出しを、外側をクリックしたら消す*/
    document.addEventListener('click', (e) => {
      let headerCategoryTxtboxPcOp = getComputedStyle(headerCategoryTxtboxPc).opacity; /*スタイル(opacity)の値を取得*/
      if(!e.target.closest('.l-header-category-txtbox--pc') && headerCategoryTxtboxPcOp == '1') {
        headerCategoryTxtboxPc.classList.remove(classIsShow); //PCのヘッダーのカテゴリーの吹き出しを消す
      } else {
      }
    });

    /*PCのヘッダーのカテゴリーの吹き出しの中のリンクのスクロール*/
    const headerCategoryTxtboxPcLink = document.querySelectorAll('.l-header-category-txtbox--pc > a');
    if (document.getElementById('page-scroll1') != null) { //#page-scroll1が存在していれば(TOPページであれば)スクロール
      headerCategoryTxtboxPcLink.forEach((elem, index) => {
        elem.addEventListener('click', function(event) {  //index番目のリンクがクリックされたら
          document.querySelector('.l-main').children[index].scrollIntoView({ //.l-main'の中のindex番目の子要素が上端までスクロール
            behavior: 'smooth',
            block: 'start',
            inline: 'center'
          });
          setTimeout(function(){
            headerCategoryTxtboxPc.classList.remove(classIsShow); //PCのヘッダーのカテゴリーの吹き出しを消す
          }, 200);
          event.preventDefault();
        });
      });

    } else { //#page-scroll1が存在していなければ(TOPページでなければ)ページ内リンク
    }

  }

  /*PCのヘッダーのカテゴリー関連(実行)*/
  _setPcHeaderCategory();

  /*PCのフッターのカテゴリーの中のリンクのスクロール(定義)*/
  const _setPcFooterCategory = () => {
    const footerLinksLinksPcLink = document.querySelectorAll('.l-footer-links__links--pc a');
    if (document.getElementById('page-scroll1') != null) { //#page-scroll1が存在していれば(TOPページであれば)スクロール
      footerLinksLinksPcLink.forEach((elem, index) => {
        elem.addEventListener('click', function(event) {  //index番目のリンクがクリックされたら
          document.querySelector('.l-main').children[index].scrollIntoView({ //.l-main'の中のindex番目の子要素が上端までスクロール
            behavior: 'smooth',
            block: 'start',
            inline: 'center'
          });
          event.preventDefault();
        });
      });

    } else { //#page-scroll1が存在していなければ(TOPページでなければ)ページ内リンク
    }
  }

  /*PCのフッターのカテゴリーの中のリンクのスクロール(実行)*/
  _setPcFooterCategory();


  /* PC検索フォーム関連(定義) */
  const _setPcSearch = () => {
    const headerSearchPcInput = document.querySelector('.c-header-search--pc input'); //PCのヘッダーの検索フォーム
    const headerCategoryTxtboxPc = document.querySelector('.l-header-category-txtbox--pc'); //PCのヘッダーのカテゴリーの吹き出し
    const headerSearchTxtboxPc = document.querySelector('.l-header-search-txtbox--pc'); //PCのヘッダーのカテゴリーの吹き出し
    const footerLinksSearchPcInput = document.querySelector('.l-footer-links__search--pc input'); //PCのフッターの検索フォーム
    const footerSearchTxtboxPc = document.querySelector('.l-footer-search-txtbox--pc'); //PCのフッターの検索フォームの吹き出し

    const searchData = [
      {
        selector: [ /*PCのヘッダーの検索フォームがフォーカスされたら*/
          headerSearchPcInput,
          headerCategoryTxtboxPc,
          headerSearchTxtboxPc,
        ],
        event: 'focus',
        class: classIsShow
      },
      {
        selector: [ /*PCのヘッダーの検索フォームのフォーカスが外れたら*/
          headerSearchPcInput,
          headerSearchTxtboxPc,
        ],
        event: 'blur',
        class: classIsShow
      },
      {
        selector: [ /*PCのフッターの検索フォームがフォーカスされたら*/
          footerLinksSearchPcInput,
          headerCategoryTxtboxPc,
          footerSearchTxtboxPc,
        ],
        event: 'focus',
        class: classIsShow
      },
      {
        selector: [ /*PCのフッターの検索フォームのフォーカスが外れたら*/
          footerLinksSearchPcInput,
          footerSearchTxtboxPc,
        ],
        event: 'blur',
        class: classIsShow
      },
    ]

    searchData.forEach((elem) => {
      elem.selector[0].addEventListener(elem.event, function () {
        elem.selector[1].classList.remove(elem.class);
        if (elem.selector[2] !== undefined) {
          elem.selector[2].classList.add(elem.class);
        }
      });
    });
    
  }

  /* PC検索フォーム関連(実行) */
  _setPcSearch();


  /*タグの背景色を指定(定義)*/
  const _setProductTagColor = () => {

    const tagList = document.querySelectorAll('.c-product-tag');
    const tagListData = {
      plan: {
        name: '企画設計',
        class: 'c-tag-plan'
      },
      design: {
        name: 'デザイン',
        class: 'c-tag-design'
      },
      htmlCss: {
        name: 'html, css',
        class: 'c-tag-htmlCss'
      },
      javaScript: {
        name: 'JavaScript',
        class: 'c-tag-javaScript'
      },
      typeScript: {
        name: 'TypeScript',
        class: 'c-tag-typeScript'
      },
      react: {
        name: 'React',
        class: 'c-tag-react'
      },
      php: {
        name: 'PHP',
        class: 'c-tag-php'
      },
      gemini: {
        name: 'Gemini',
        class: 'c-tag-gemini'
      },
      next: {
        name: 'Next.js',
        class: 'c-tag-next'
      },

    }

    tagList.forEach((elem) => {
      let tagListText = elem.textContent;
      switch (tagListText) {
        case tagListData.plan.name:
        elem.classList.add(tagListData.plan.class);
        break;
        case tagListData.design.name:
        elem.classList.add(tagListData.design.class);
        break;
        case tagListData.htmlCss.name:
        elem.classList.add(tagListData.htmlCss.class);
        break;
        case tagListData.javaScript.name:
        elem.classList.add(tagListData.javaScript.class);
        break;
        case tagListData.typeScript.name:
        elem.classList.add(tagListData.typeScript.class);
        break;
        case tagListData.react.name:
        elem.classList.add(tagListData.react.class);
        break;
        case tagListData.php.name:
        elem.classList.add(tagListData.php.class);
        break;
        case tagListData.gemini.name:
        elem.classList.add(tagListData.gemini.class);
        break;
        case tagListData.next.name:
        elem.classList.add(tagListData.next.class);
        break;
      }
    });

  }

  /*タグの背景色を指定(実行)*/
  _setProductTagColor();


  /*検索結果に当てはまらないカスタム投稿エリアは非表示(定義)*/
  const setPostNone = () => {
    let noPost = document.getElementsByClassName('p-product-area__inner');
    let noPostNum = noPost.length;
    for (index = 0; index < noPostNum; index++) {
      let noPostChildTag = noPost[index].firstElementChild;
      if (noPostChildTag != null) { //子要素を持っていれば
      } else {
        noPost[index].parentNode.style.display = 'none'; //子要素が無ければ
      }
    }
  }

  /*検索結果に当てはまらないカスタム投稿エリアは非表示(実行)*/
  setPostNone();

});



