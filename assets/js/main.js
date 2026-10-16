/* pinned-animations.js
   Drives the 4 pinned sections that style.css already styles:
   .genie-area.is-live | .web-wall.is-cam | .brand-worlds.is-live | .shift-area.is-live
   Needs: gsap + ScrollTrigger (already loaded before main.js). Load this AFTER site-animations.js. */
(function () {
  'use strict';
  if (!window.gsap || !window.ScrollTrigger) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  gsap.registerPlugin(ScrollTrigger);
  ScrollTrigger.config({ ignoreMobileResize: true });

  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  var pad = function (n) { return String(n).padStart(2, '0'); };
  var vh = function () { return window.innerHeight; };

  // the generic fade-up reveals would fight the pinned stages, so strip them there
  function free(section) {
    $$('[data-site-reveal]', section).forEach(function (e) { e.removeAttribute('data-site-reveal'); });
  }

  /* ---------- 1. GENIE ---------- */
  function genie() {
    var area = $('.genie-area');
    if (!area) return;
    free(area);
    area.classList.add('is-live');

    var wishes = ['a logo that pops', '10x my sales', 'go viral', '#1 on Google', 'a brand people trust',
      'a website by tonight', '1M followers', 'the perfect story', 'instant trust', 'zero ad spend',
      'a sold-out launch', 'a cult following', 'global reach', 'press everywhere', 'loyal customers', 'more leads'];
    function fill(layer, count) {
      if (!layer) return;
      for (var i = 0; i < count; i++) {
        var w = document.createElement('span');
        w.className = 'genie-wish';
        w.textContent = wishes[(i * 5 + count) % wishes.length];
        w.style.left = (Math.random() * 88) + '%';
        w.style.top = (Math.random() * 92) + '%';
        layer.appendChild(w);
      }
    }
    fill($('.is-far', area), 12);
    fill($('.is-mid', area), 14);
    fill($('.is-near', area), 4);

    // cursor acts as the lamp beam
    var beam = $('.genie-wishes', area);
    area.addEventListener('mousemove', function (e) {
      var r = area.getBoundingClientRect();
      beam.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      beam.style.setProperty('--my', (e.clientY - r.top) + 'px');
    });

    var wrap = $('.genie-question-wrap', area), easy = $('.genie-easy', area), one = $('.genie-one', area);
    var lamp = $('.genie-lamp', area), tint = $('.genie-lamp-tint', area);
    var lampBits = $$('.genie-lamp-top, .genie-rare-lead span, .genie-rare-word, .genie-lamp-bottom', lamp);

    gsap.set(easy, { opacity: 0, y: 60 });
    gsap.set(one, { xPercent: -50, opacity: 0 });
    gsap.set(lamp, { clipPath: 'circle(0% at 50% 78%)' });
    gsap.set(lampBits, { opacity: 0, y: 40 });

    var tl = gsap.timeline({
      scrollTrigger: { trigger: $('.genie-stage', area), start: 'top top', end: '+=320%', pin: true, scrub: 0.6, anticipatePin: 1 }
    });
    tl.to($('.is-far', area), { y: -80, duration: 5, ease: 'none' }, 0)
      .to($('.is-mid', area), { y: -180, duration: 5, ease: 'none' }, 0)
      .to($('.is-near', area), { y: -520, duration: 5, ease: 'none' }, 0)
      .to(wrap, { y: -120, opacity: 0, scale: 0.94, duration: 1, ease: 'power2.in' }, 1)
      .to(easy, { opacity: 1, y: 0, duration: 0.9 }, 1.5)
      .to(one, { opacity: 1, duration: 0.5 }, 2.6)
      .to(easy, { opacity: 0, duration: 0.5 }, 3)
      .to(lamp, { clipPath: 'circle(150% at 50% 78%)', duration: 1.3, ease: 'power2.in' }, 3.2)
      .to(one, { opacity: 0, duration: 0.4 }, 4.1)
      .to(tint, { opacity: 0, duration: 0.7 }, 4.3)
      .to(lampBits, { opacity: 1, y: 0, duration: 0.7, stagger: 0.12 }, 4.4);
  }

  /* ---------- 2. WEB WALL (camera flythrough) ---------- */
  function webWall() {
    var sec = $('.web-wall');
    if (!sec) return;
    var stage = $('.web-wall-stage', sec), grid = $('.web-wall-grid', sec), tilt = $('.web-wall-tilt', sec);
    var tiles = $$('.web-wall-tile', sec);
    if (!tiles.length) return;
    free(sec);
    sec.classList.add('is-cam');

    var intro = $('.web-wall-intro', sec), hudInner = $('.web-wall-hud-inner', sec), bar = $('.web-wall-progress span', sec);
    var hNum = $('.web-wall-hud-num', sec), hName = $('.web-wall-hud-name', sec), hTag = $('.web-wall-hud-tag', sec);
    var hUrl = $('.web-wall-hud-url', sec), hBtn = $('.web-wall-hud-btn', sec);
    var n = tiles.length, arrive = [], current = -2;

    function target(t) {
      var portrait = window.innerHeight > window.innerWidth;
      return {
        x: window.innerWidth / 2 - (t.offsetLeft + t.offsetWidth / 2),
        y: (portrait ? 0.36 : 0.42) * window.innerHeight - (t.offsetTop + t.offsetHeight / 2)
      };
    }
    function park() { var t = target(tiles[0]); gsap.set(grid, { x: t.x, y: t.y }); }
    park();
    ScrollTrigger.addEventListener('refreshInit', park);
    $$('video', sec).forEach(function (v) { v.addEventListener('loadedmetadata', function () { ScrollTrigger.refresh(); }); });
    gsap.set(hudInner, { opacity: 0 });

    function setActive(i) {
      if (i === current) return;
      current = i;
      sec.classList.toggle('has-active', i >= 0);
      tiles.forEach(function (t, k) { t.classList.toggle('is-active', k === i); });
      gsap.to(hudInner, { opacity: i >= 0 ? 1 : 0, duration: 0.4, overwrite: true });
      if (i < 0) return;
      var t = tiles[i];
      hNum.textContent = pad(i + 1) + ' / ' + pad(n);
      hName.textContent = $('.web-wall-name', t).textContent;
      hTag.textContent = $('.web-wall-tag', t).textContent;
      hUrl.textContent = t.href.replace(/^https?:\/\/(www\.)?/, '').replace(/\/$/, '');
      hBtn.href = t.href;
      gsap.fromTo(hName, { yPercent: 25, opacity: 0 }, { yPercent: 0, opacity: 1, duration: 0.5, ease: 'power3.out' });
    }

    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: stage, start: 'top top', end: function () { return '+=' + n * vh() * 0.9; },
        pin: true, scrub: 0.8, anticipatePin: 1, invalidateOnRefresh: true,
        onUpdate: function (self) {
          var t = tl.time(), idx = -1;
          for (var i = 0; i < n; i++) if (arrive[i] - 0.45 <= t) idx = i;
          setActive(idx);
          gsap.set(bar, { scaleX: self.progress });
        }
      }
    });
    tl.to(intro, { opacity: 0, scale: 1.12, duration: 1, ease: 'power1.in' }, 0)
      .fromTo(tilt, { scale: 1.35 }, { scale: 1, duration: 1.6, ease: 'power2.out' }, 0)
      .to({}, { duration: 0.8 }, 1);
    arrive[0] = 1;
    for (var i = 1; i < n; i++) {
      (function (k) {
        tl.to(grid, {
          x: function () { return target(tiles[k]).x; },
          y: function () { return target(tiles[k]).y; },
          duration: 1.2, ease: 'power2.inOut'
        });
        arrive[k] = tl.duration();
        tl.to({}, { duration: 0.8 });
      })(i);
    }
  }

  /* ---------- 3. BRAND WORLDS (circular portals) ---------- */
  // function brands() {
  //   var sec = $('.brand-worlds');
  //   if (!sec) return;
  //   var stage = $('.brand-stage', sec), intro = $('.brand-intro', sec), scenes = $$('.brand-scene', sec);
  //   if (!scenes.length) return;
  //   free(sec);
  //   sec.classList.add('is-live');
  //   scenes.forEach(function (s, i) { s.style.zIndex = i + 1; });
  //   gsap.set(scenes, { clipPath: 'circle(0% at 50% 50%)' });

  //   function dist(scene) {
  //     var track = $('.brand-scene-track', scene), board = $('.brand-scene-board', scene);
  //     var left = board.getBoundingClientRect().left;
  //     return Math.max(0, track.scrollWidth - (window.innerWidth - left - 30));
  //   }

  //   var tl = gsap.timeline({
  //     scrollTrigger: {
  //       trigger: stage, start: 'top top', end: function () { return '+=' + tl.duration() * vh() * 0.5; },
  //       pin: true, scrub: 0.8, anticipatePin: 1, invalidateOnRefresh: true
  //     }
  //   });
  //   tl.to(intro, { opacity: 0, scale: 0.9, duration: 0.8, ease: 'power1.in' }, 0);
  //   scenes.forEach(function (scene, i) {
  //     var inner = $('.brand-scene-inner', scene), track = $('.brand-scene-track', scene);
  //     var giant = $('.brand-scene-giant', scene), imgs = $$('img', track).length;
  //     var pan = 1 + imgs * 0.5;
  //     tl.to(scene, { clipPath: 'circle(150% at 50% 50%)', duration: 1, ease: 'power2.inOut' }, i === 0 ? 0.3 : '>')
  //       .fromTo(inner, { y: 60, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: 'power2.out' }, '<0.4')
  //       .to(track, { x: function () { return -dist(scene); }, duration: pan, ease: 'none' }, '>')
  //       .fromTo(giant, { xPercent: 0 }, { xPercent: -22, duration: pan + 1, ease: 'none' }, '<-0.6');
  //   });
  // }


  /* brand portals */

var scenes=$$('.scene');gsap.set(scenes,{clipPath:'circle(0% at 50% 50%)'});

/* images load ayyaka card widths marutayi (width:auto), so pan distance recalc cheyali */
var rfT;function rfSoon(){clearTimeout(rfT);rfT=setTimeout(function(){ScrollTrigger.refresh()},150)}
$$('.scene .tr img').forEach(function(im){
  if(!im.complete)im.addEventListener('load',rfSoon);
  im.addEventListener('error',rfSoon);
});

var bt=gsap.timeline({scrollTrigger:{trigger:'#brands',start:'top top',end:function(){return'+='+bt.duration()*innerHeight*.5},pin:true,scrub:.8,anticipatePin:1,invalidateOnRefresh:true}});

bt.to('#brands .intro',{opacity:0,scale:.9,duration:.8},0);

scenes.forEach(function(s,i){
  var tr=$('.tr',s),pan=1+tr.children.length*.5;

  function dist(){
    var left=$('.brand-gallery',s).getBoundingClientRect().left;
    return Math.max(0,tr.scrollWidth-(innerWidth-left-30));
  }

  /* every image card: enters from the right with fade + scale + rise as the strip pans */
  function fx(){
    var W=innerWidth;
    [].slice.call(tr.children).forEach(function(c){
      var r=c.getBoundingClientRect();
      var v=Math.max(0,Math.min(1,(W-r.left)/(W*.3)));
      gsap.set(c,{opacity:.25+.75*v,scale:.9+.1*v,y:(1-v)*26,transformOrigin:'left center'});
    });
  }

  bt.to(s,{clipPath:'circle(150% at 50% 50%)',duration:1,ease:'power2.inOut'},i?'>':.3)
   .fromTo($('.in',s),{y:60,opacity:0},{y:0,opacity:1,duration:.8},'<.4')
   .to(tr,{x:function(){return -dist()},duration:pan,ease:'none',onUpdate:fx},'>')
   .fromTo($('.gt',s),{xPercent:0},{xPercent:-22,duration:pan+1,ease:'none'},'<-.6');

  fx();
  ScrollTrigger.addEventListener('refresh',fx);
});

  /* ---------- 4. SHIFT LENS ---------- */
  function shift() {
    var sec = $('.shift-area');
    if (!sec) return;
    var steps = $$('.shift-step', sec), n = steps.length;
    if (!n) return;
    free(sec);
    sec.classList.add('is-live');
    sec.style.setProperty('--steps', n);

    var zone = $('.shift-lens-zone', sec), lens = $('.shift-lens', sec), handle = $('.shift-handle', sec);
    var sharp = $('.shift-word.is-sharp', sec), fillEl = $('.shift-track-fill', sec), track = $('.shift-track', sec);
    var now = $('.shift-count-now span', sec), state = { p: 0, open: 0 }, last = -1;

    function layout() {
      var z = zone.getBoundingClientRect(), tr = track.getBoundingClientRect(), f = state.p * (n - 1);
      var a = Math.floor(f), b = Math.min(n - 1, a + 1), m = f - a;
      var xa = steps[a].getBoundingClientRect().left + 5.5, xb = steps[b].getBoundingClientRect().left + 5.5;
      var xAbs = xa + (xb - xa) * m, cx = xAbs - z.left, cy = z.height * 0.5;
      var D = Math.min(z.height * 0.9, 340), maxR = Math.hypot(z.width, z.height);
      var r = D / 2 + state.open * (maxR - D / 2), fade = Math.max(0, 1 - state.open * 3);
      var nodeY = fillEl.getBoundingClientRect().top - z.top;

      gsap.set(lens, { x: cx - D / 2, y: cy - D / 2, width: D, height: D, opacity: fade });
      gsap.set(handle, { x: cx, y: cy + D / 2, height: Math.max(0, nodeY - (cy + D / 2)), opacity: fade });
      sharp.style.clipPath = 'circle(' + r + 'px at ' + cx + 'px ' + cy + 'px)';
      gsap.set(fillEl, { scaleX: Math.max(0, Math.min(1, (xAbs - tr.left) / tr.width)) });

      var idx = Math.min(n - 1, Math.round(f));
      if (idx !== last) {
        last = idx;
        steps.forEach(function (s, k) { s.classList.toggle('is-active', k === idx); s.classList.toggle('is-done', k < idx); });
        now.textContent = pad(idx + 1);
      }
    }
    layout();
    ScrollTrigger.addEventListener('refresh', layout);

    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: $('.shift-stage', sec), start: 'top top', end: function () { return '+=' + (n * 0.8 + 1.2) * vh(); },
        pin: true, scrub: 0.6, anticipatePin: 1
      }
    });
    tl.to({}, { duration: 0.4 })
      .to(state, { p: 1, duration: n - 1, ease: 'none', onUpdate: layout })
      .to(state, { open: 1, duration: 1.2, ease: 'power2.in', onUpdate: layout });
  }

  function start() {
    genie();
    webWall();
    brands();
    shift();
    ScrollTrigger.sort();
    ScrollTrigger.refresh();
  }
  if (document.readyState === 'complete') start();
  else window.addEventListener('load', start, { once: true });
})();

window.buildWorkTiles = function (sites) {
  sites.forEach(function (s) {
    var d = document.createElement('a');
    d.className = 'tile';
    d.href = s[4] || '#';
    d.target = '_blank';
    d.rel = 'noopener';
    d.dataset.t = s[1];
    d.dataset.n = s[0];
    d.style.background = 'linear-gradient(135deg,' + s[2] + ',#0a0a0a)';
    d.style.position = 'relative';
    d.style.overflow = 'hidden';

    var label = document.createElement('span');
    label.textContent = s[0];
    label.style.cssText = 'position:relative;z-index:2;text-shadow:0 2px 12px rgba(0,0,0,.75)';
    d.appendChild(label);

    var video = document.createElement('video');
    video.src = s[3] + '#t=0.1';
    video.muted = true;
    video.defaultMuted = true;
    video.loop = true;
    video.playsInline = true;
    video.preload = 'metadata';
    video.setAttribute('muted', '');
    video.setAttribute('playsinline', '');
    video.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:1;pointer-events:none';
    d.appendChild(video);

    document.getElementById('wt').appendChild(d);
  });
};



