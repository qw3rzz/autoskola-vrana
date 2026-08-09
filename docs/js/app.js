document.querySelectorAll('.faq-q').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const item = btn.parentElement;
      const answer = item.querySelector('.faq-a');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i=>{
        i.classList.remove('open');
        i.querySelector('.faq-a').style.maxHeight = null;
      });
      if(!isOpen){
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  document.querySelectorAll('.scope-toggle').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const card = btn.closest('.service-card');
      const body = document.getElementById(btn.dataset.target);
      const isOpen = card.classList.contains('open');
      if(isOpen){
        card.classList.remove('open');
        body.style.maxHeight = null;
        btn.innerHTML = '<span class="plus">+</span> Zobrazit rozsah oprávnění';
      }else{
        card.classList.add('open');
        body.style.maxHeight = body.scrollHeight + 'px';
        btn.innerHTML = '<span class="plus">+</span> Skrýt rozsah oprávnění';
      }
    });
  });

  function openFaqFromHash(){
    const hash = window.location.hash.replace('#','');
    if(!hash) return;
    const target = document.getElementById(hash);
    if(target && target.classList.contains('faq-item')){
      document.querySelectorAll('.faq-item').forEach(i=>{
        i.classList.remove('open');
        i.querySelector('.faq-a').style.maxHeight = null;
      });
      target.classList.add('open');
      const answer = target.querySelector('.faq-a');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  }
  window.addEventListener('hashchange', openFaqFromHash);
  window.addEventListener('load', openFaqFromHash);