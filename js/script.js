document.addEventListener('DOMContentLoaded', () => {
  // ハンバーガーメニュー
  const headerToggle = document.querySelector('.header__toggle');
  const mobileMenu = document.querySelector('.mobile-menu');
  const body = document.body;

  if (headerToggle && mobileMenu) {
    headerToggle.addEventListener('click', () => {
      headerToggle.classList.toggle('is-active');
      mobileMenu.classList.toggle('is-open');
      body.classList.toggle('menu-open');
    });

    // モバイルメニューのリンクをクリックしたらメニューを閉じる
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        headerToggle.classList.remove('is-active');
        mobileMenu.classList.remove('is-open');
        body.classList.remove('menu-open');
      });
    });
  }

  // スムーズスクロール
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#' || targetId === '') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        const header = document.querySelector('.header');
        const headerHeight = header ? header.offsetHeight : 0;
        const targetPosition = targetElement.offsetTop - headerHeight;
        
        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        // メニューが開いていたら閉じる
        if (headerToggle && mobileMenu && body.classList.contains('menu-open')) {
          headerToggle.classList.remove('is-active');
          mobileMenu.classList.remove('is-open');
          body.classList.remove('menu-open');
        }
      }
    });
  });

  // スクロール時のヘッダー処理
  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > 50) {
      body.classList.add('is-scrolled');
    } else {
      body.classList.remove('is-scrolled');
    }
  });

  // サービスページのタブ切り替え
  const serviceTabs = document.querySelectorAll('.services-detail__tab');
  const servicePanels = document.querySelectorAll('.services-detail__panel');

  if (serviceTabs.length > 0 && servicePanels.length > 0) {
    serviceTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const targetId = tab.dataset.tab;
        
        // すべてのタブとパネルから active クラスを削除
        serviceTabs.forEach(t => t.classList.remove('active'));
        servicePanels.forEach(p => p.classList.remove('active'));
        
        // クリックされたタブと対応するパネルに active クラスを追加
        tab.classList.add('active');
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) {
          targetPanel.classList.add('active');
        }
      });
    });
  }

  // フェードインアニメーション
  const fadeElements = document.querySelectorAll('.fade-in');
  
  if (fadeElements.length > 0) {
    const fadeInObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, {
      threshold: 0.1
    });

    fadeElements.forEach(element => {
      fadeInObserver.observe(element);
    });
  }
});