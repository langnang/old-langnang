/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js");

self.addEventListener('message', (event) => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "404.html",
    "revision": "2641e805ed377303abc204e1155d2664"
  },
  {
    "url": "52010/5201040/index.html",
    "revision": "b31a642f2d6a68395fcad736501af2a1"
  },
  {
    "url": "52010/5201050/index.html",
    "revision": "6f88efb9bfc3addf90a5281af18bdf96"
  },
  {
    "url": "52010/5201060/index.html",
    "revision": "45c39d089b5f52f01f7d0fc4e876ae2a"
  },
  {
    "url": "52040/5204010/index.html",
    "revision": "bc02f60f3758e86c5e08eba121454b73"
  },
  {
    "url": "52040/5204020/index.html",
    "revision": "fcba0f5735ebed1fb42108602ae6d35d"
  },
  {
    "url": "52040/5204030/@function/Array/index.html",
    "revision": "79091753a1698c7375d5ee3f338c769d"
  },
  {
    "url": "52040/5204030/index.html",
    "revision": "6be9a47bff42845f56d536c8207b9ca6"
  },
  {
    "url": "52040/5204050/index.html",
    "revision": "b7fdf05ede12ee6c6da7db302c034364"
  },
  {
    "url": "52040/5204060/CSS/Awesome/index.html",
    "revision": "b348005a5f84e6bfbb1aea839a1e4305"
  },
  {
    "url": "52040/5204060/CSS/index.html",
    "revision": "bc939661e8f270e7bb0963d360a085a3"
  },
  {
    "url": "52040/5204060/HTML/index.html",
    "revision": "f03d5c0f9d71447b25e3f4702be4d4bb"
  },
  {
    "url": "52040/5204060/index.html",
    "revision": "0a6a7c26f4c0b8dafb09199fea9e7dc4"
  },
  {
    "url": "52040/5204060/JavaScript/Awesome/index.html",
    "revision": "17d63f40ab6abf42d18c9b358bb39d71"
  },
  {
    "url": "52040/5204060/JavaScript/Awesome/Vue/index.html",
    "revision": "35f16c65d4ebfa7b692614301f8f1628"
  },
  {
    "url": "52040/5204060/JavaScript/index.html",
    "revision": "f222b05e55474883f5dcf1028d967c51"
  },
  {
    "url": "52040/5204060/NodeJs/index.html",
    "revision": "c1430197b726807407e02d592082615e"
  },
  {
    "url": "52040/5204070/index.html",
    "revision": "e889d70324c332b31143612345599036"
  },
  {
    "url": "assets/css/0.styles.ef9a7ca0.css",
    "revision": "9c8a85d83695c6e9e6d595af2990f629"
  },
  {
    "url": "assets/fonts/MathJax_AMS-Regular.07173fb7.woff",
    "revision": "07173fb77d2ee655811499d40c8388e7"
  },
  {
    "url": "assets/fonts/MathJax_Fraktur-Bold.bc421258.woff",
    "revision": "bc42125861bd5bfc8686deeb612dcbb3"
  },
  {
    "url": "assets/fonts/MathJax_Fraktur-Regular.b80e08d5.woff",
    "revision": "b80e08d5a79acbd1fafb1ca6f3515664"
  },
  {
    "url": "assets/fonts/MathJax_Main-Bold.c9423d5d.woff",
    "revision": "c9423d5dc9d82a38ca215f74e9cdd9f2"
  },
  {
    "url": "assets/fonts/MathJax_Main-Italic.7e83626b.woff",
    "revision": "7e83626ba8bf2d20dc41565f1e6d0afc"
  },
  {
    "url": "assets/fonts/MathJax_Main-Regular.9995de47.woff",
    "revision": "9995de4787f908d8237dba7007f6c3fe"
  },
  {
    "url": "assets/fonts/MathJax_Math-BoldItalic.77dbcee3.woff",
    "revision": "77dbcee3c3d9a82a0c04a4ae7992b895"
  },
  {
    "url": "assets/fonts/MathJax_Math-Italic.5589d1a8.woff",
    "revision": "5589d1a8fc62be6613020ef2fa13e410"
  },
  {
    "url": "assets/fonts/MathJax_SansSerif-Bold.07281897.woff",
    "revision": "07281897a98a61c3733e1670f82a9fd5"
  },
  {
    "url": "assets/fonts/MathJax_SansSerif-Italic.3d580bd5.woff",
    "revision": "3d580bd561716bfb1f0b4fdd7063a802"
  },
  {
    "url": "assets/fonts/MathJax_SansSerif-Regular.bc3af04f.woff",
    "revision": "bc3af04f9a671fcabd6498042c57478f"
  },
  {
    "url": "assets/fonts/MathJax_Script-Regular.4c74e33b.woff",
    "revision": "4c74e33b0feb1fdbda49403a5e7ed604"
  },
  {
    "url": "assets/fonts/MathJax_Typewriter-Regular.72815766.woff",
    "revision": "72815766b08ca24d4d29ad1f5d4ecb45"
  },
  {
    "url": "assets/img/search.83621669.svg",
    "revision": "83621669651b9a3d4bf64d1a670ad856"
  },
  {
    "url": "assets/js/10.67f5e9f2.js",
    "revision": "76033a697933ac316000240540c2f4f1"
  },
  {
    "url": "assets/js/11.0463b9c8.js",
    "revision": "df52c0fae870ca6295a224d9c0781512"
  },
  {
    "url": "assets/js/12.5e38189a.js",
    "revision": "4769af1b742ae25e0808dcae563d7467"
  },
  {
    "url": "assets/js/13.094af45b.js",
    "revision": "7041b3d01741daa02a8e9d4bfc33d6ca"
  },
  {
    "url": "assets/js/14.7f2af5d0.js",
    "revision": "6fdf45cb0bd0a4dfc4c7117286dc32fd"
  },
  {
    "url": "assets/js/15.fc30fcaf.js",
    "revision": "be0d6b3de146b7a915358c9bdc4c4c91"
  },
  {
    "url": "assets/js/16.84e5b181.js",
    "revision": "7707bc9aec6bb7d998c0dff28296569d"
  },
  {
    "url": "assets/js/17.11780704.js",
    "revision": "9e2e1b0c849396288a2bacb96bbcf9af"
  },
  {
    "url": "assets/js/18.d522a36a.js",
    "revision": "e19fba89aed11f86b798e75facb614c3"
  },
  {
    "url": "assets/js/19.b7dd1e0a.js",
    "revision": "02ec36db413a3da912115ad17953206c"
  },
  {
    "url": "assets/js/20.f9ad1416.js",
    "revision": "2c86735d55ddea0667df2a70834b5585"
  },
  {
    "url": "assets/js/21.e85acd3a.js",
    "revision": "112b7e8d0259dbe50fec6b224048fcb1"
  },
  {
    "url": "assets/js/22.dd3c50ab.js",
    "revision": "3ed453cc989aaae9c5af544d9a62960c"
  },
  {
    "url": "assets/js/23.a19cd0e9.js",
    "revision": "9c1e5e65cec638134cc4cb871b4bafa9"
  },
  {
    "url": "assets/js/24.934fa1b2.js",
    "revision": "a657c2cb89f0941de1285b2a3cd22812"
  },
  {
    "url": "assets/js/25.5cadd688.js",
    "revision": "38a997b956b9898ca51973f4686a79b3"
  },
  {
    "url": "assets/js/26.b091b5d1.js",
    "revision": "c9cbc1ae8b6793f6bb9b67ca6fc92cd6"
  },
  {
    "url": "assets/js/27.bebc10f1.js",
    "revision": "6d0398e5df89eedaaf75be93ef2049df"
  },
  {
    "url": "assets/js/28.d7c1ff50.js",
    "revision": "b594f20b3231edfde61a5dc3ec183554"
  },
  {
    "url": "assets/js/29.9bfae71b.js",
    "revision": "5996ca7328602b3a84db540f7e0bae17"
  },
  {
    "url": "assets/js/3.5dad3188.js",
    "revision": "3475133131166995d87310381da602a7"
  },
  {
    "url": "assets/js/30.0bed643e.js",
    "revision": "382a03bdd9592df46267883211e8d917"
  },
  {
    "url": "assets/js/31.891a4cf1.js",
    "revision": "10a2eb3b5e58116df345d6ad4d35f254"
  },
  {
    "url": "assets/js/32.3a5830cc.js",
    "revision": "4fafeb1676bde6a0434af79e0069a805"
  },
  {
    "url": "assets/js/33.7b513cc7.js",
    "revision": "f57251953ed758565703f690e7964546"
  },
  {
    "url": "assets/js/34.35cbef32.js",
    "revision": "ab6fd5dd8d6d6ad0e8c6bf9b71745792"
  },
  {
    "url": "assets/js/35.72ba55ac.js",
    "revision": "2343e46bbe3c3dca9a6a6fe6d9d07552"
  },
  {
    "url": "assets/js/36.666571a0.js",
    "revision": "14d7a3c90fae213e30afc39720af3c74"
  },
  {
    "url": "assets/js/37.87ac87af.js",
    "revision": "f6089b399dcb468c416e9367feb2529a"
  },
  {
    "url": "assets/js/38.d056d932.js",
    "revision": "de7ed06b5c4771a7a16732a8d62a2d94"
  },
  {
    "url": "assets/js/39.0322c78a.js",
    "revision": "88d4807134ffe261fbd016f73c53a338"
  },
  {
    "url": "assets/js/4.9a98c138.js",
    "revision": "14fa5884058bc950ae0b183e69b60b10"
  },
  {
    "url": "assets/js/40.213e23c5.js",
    "revision": "1db986270a8605d0cf3f8dc4eed9ed0d"
  },
  {
    "url": "assets/js/41.dfd514f7.js",
    "revision": "023d0e5f44b3a09eac4ee84eca67c2ee"
  },
  {
    "url": "assets/js/5.8007a496.js",
    "revision": "f4a8a4d792bf3fd8a842d431679af078"
  },
  {
    "url": "assets/js/6.0525bae1.js",
    "revision": "5171ccd6939dbb0e42677d06149cc335"
  },
  {
    "url": "assets/js/7.f2554bc1.js",
    "revision": "6b66b44f89015a10418c4f92734a0e49"
  },
  {
    "url": "assets/js/8.54144eaf.js",
    "revision": "0dfbf43165c8b39f35a3d2c36aacda5e"
  },
  {
    "url": "assets/js/9.38dcae26.js",
    "revision": "a0b7f7efec660ee722a42a9edc1e8a21"
  },
  {
    "url": "assets/js/app.18aa22e8.js",
    "revision": "ad778ced06a3598c5088518909b4a1f9"
  },
  {
    "url": "assets/js/vendors~flowchart.8969c3d6.js",
    "revision": "19726498bbe883bf7ea6fce020eefa96"
  },
  {
    "url": "hero.png",
    "revision": "d1fed5cb9d0a4c4269c3bcc4d74d9e64"
  },
  {
    "url": "index.html",
    "revision": "1e1a0f12d0ae1198a43f2e56313da074"
  },
  {
    "url": "logo.png",
    "revision": "d1fed5cb9d0a4c4269c3bcc4d74d9e64"
  },
  {
    "url": "toolkit/index.html",
    "revision": "02790f714d0c38a4024c26d2a785652b"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});
addEventListener('message', event => {
  const replyPort = event.ports[0]
  const message = event.data
  if (replyPort && message && message.type === 'skip-waiting') {
    event.waitUntil(
      self.skipWaiting().then(
        () => replyPort.postMessage({ error: null }),
        error => replyPort.postMessage({ error })
      )
    )
  }
})
