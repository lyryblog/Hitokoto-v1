@extends('layouts.app')

@section('content')
        <div class="hitokoto-container mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="hitokoto-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                <div class="hitokoto-crumbs mdl-color-text--grey-500">
                    Hitokoto &gt; Api
                </div>
                <h3>一言网 Api 接口说明</h3>
                <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="330" height="108" src="https://cdn.a632079.me/163cplayer.html?playlist=496869422"></iframe>
                <h4>1、说明</h4>
                <p>
                    一言网(Hitokoto.cn)创立于2016年，隶属于萌创Team，目前网站主要提供一句话服务。
                </p>
                <p>
                    动漫也好、小说也好、网络也好，不论在哪里，我们总会看到有那么一两个句子能穿透你的心。我们把这些句子汇聚起来，形成一言网络，以传递更多的感动。如果可以，我们希望我们没有停止服务的那一天。
                </p>
                <p>
                    简单来说，一言指的就是一句话，可以是动漫中的台词，也可以是网络上的各种小段子。<br/>或是感动，或是开心，有或是单纯的回忆。来到这里，留下你所喜欢的那一句句话，与大家分享，这就是一言存在的目的。<br/>
                    *:本段文本源自hitokoto.us

                </p>
                <h4>2、Api</h4>
                <p>
                    提示:旧接口http://api.hitokoto.cn和https://sslapi.hitokoto.cn将在未来一段时间内停用之前的旧版本api，无缝切换(切换解析)到目前的v1新api。
                </p>
                <p>
                    提示:Hitokoto预计将在2018年6-8月份做网站大版本更新。届时会有更多的新api加入，欢迎各位持续关注。v1的api不会受到大版本调整影响。
                </p>
                <p>
                    请求地址：<br/>
                    HTTP(s): https://v1.hitokoto.cn/
                </p>
                <h4>3、参数</h4>
                <p>

                <table class="apitable" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <th  width="100"><b>参数名称</b></th>
                        <th  width="100"><b>类型</b></th>
                        <th  colspan="4"><b>描述</b></th>
                    </tr>
                    <tr style="text-align: center;">
                        <td rowspan="9">c</td>
                        <td rowspan="9">可选</td>
                        <td colspan="4">Cat，即类型。提交不同的参数代表不同的类别，具体：</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td colspan="2">Anime - 动画</td>
                    </tr>
                    <tr>
                        <td>b</td>
                        <td colspan="2">Comic – 漫画</td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td colspan="2">Game – 游戏</td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td colspan="2">Novel – 小说</td>
                    </tr>
                    <tr>
                        <td>e</td>
                        <td colspan="2">Myself – 原创</td>
                    </tr>
                    <tr>
                        <td>f</td>
                        <td colspan="2">Internet – 来自网络</td>
                    </tr>
                    <tr>
                        <td>g</td>
                        <td colspan="2">Other – 其他</td>
                    </tr>
                    <tr>
                        <td>其他不存在参数</td>
                        <td colspan="2">任意类型随机取得</td>
                    </tr>
                    <tr>
                        <td rowspan="5" style="text-align: center;">encode</td>
                        <td rowspan="5" style="text-align: center;">可选</td>

                    </tr>
                    <tr>
                        <td>text</td>
                        <td colspan="2">返回纯净文本</td>
                    </tr>
                    <tr>
                        <td>json</td>
                        <td colspan="2">返回不进行unicode转码的json文本</td>
                    </tr>
                    <tr>
                        <td>js</td>
                        <td colspan="2">返回指定选择器(默认.hitokoto)的同步执行函数。</td>
                    </tr>
                    <tr>
                        <td>其他不存在参数</td>
                        <td colspan="2">返回unicode转码的json文本</td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="text-align: center;">charset</td>
                        <td rowspan="3" style="text-align: center;">可选</td>
                    </tr>
                    <tr>
                        <td>utf-8</td>
                        <td colspan="2">返回 UTF-8 编码的内容，支持与异步函数同用。</td>
                    </tr>
                    <tr>
                        <td>gbk</td>
                        <td colspan="2">返回 GBK 编码的内容，不支持与异步函数同用。</td>
                    </tr>
                    <tr>
                        <td rowspan="2" style="text-align: center;">callback</td>
                        <td rowspan="2" style="text-align: center;">可选</td>
                    </tr>
                    <tr>
                        <td>回调函数</td>
                        <td colspan="2">将返回的内容传参给指定的异步函数。</td>
                    </tr>
                    </tbody>
                </table>

                </p>
                <h4>4、返回（默认json格式）</h4>
                <table class="apitable" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <th><b>返回参数名称</b></th>
                        <th><b>描述</b></th>
                    </tr>
                    <tr>
                        <td>id</td>
                        <td>本条一言的id。<br/>可以链接到https://hitokoto.cn?id=[id]查看这个一言的完整信息。</td>
                    </tr>
                    <tr>
                        <td>hitokoto</td>
                        <td>一言正文。编码方式unicode。使用utf-8。</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>类型。请参考第三节参数的表格。</td>
                    </tr>
                    <tr>
                        <td>from</td>
                        <td>一言的出处。</td>
                    </tr>
                    <tr>
                        <td>creator</td>
                        <td>添加者。</td>
                    </tr>
                    <tr>
                        <td>cearted_at</td>
                        <td>添加时间。</td>
                    </tr>
                    <tr>
                        <td colspan="2">注意：如果encode参数为text，那么输出的只有一言正文。</td>
                    </tr>
                    </tbody>
                </table>
                <h4>5、示例</h4>
                <p>
                    https://v1.hitokoto.cn/（从7种分类中随机抽取）<br/><br/>
                    https://v1.hitokoto.cn/?c=b （请求获得一个分类是漫画的句子）<br/><br/>
                    https://v1.hitokoto.cn/?c=f&encode=text （请求获得一个来自网络的句子，并以纯文本格式输出）
                </p>
                <h5>网页使用示例:</h4>
            <pre><code language="html">&lt;p id=&quot;hitokoto&quot;&gt;:D 获取中...&lt;/p&gt;
&lt;!-- 以下写法，选取一种即可 --&gt;

&lt;!-- 现代写法，推荐 --&gt;
&lt;!-- 兼容低版本浏览器 (包括 IE)，可移除 --&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js&quot;&gt;&lt;/script&gt;
&lt;!--End--&gt;
&lt;script&gt;
  fetch('https://v1.hitokoto.cn')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto; 
    })
    .catch(function (err) {
      console.error(err);
    })
&lt;/script&gt;

&lt;!-- 老式写法，兼容性最忧 --&gt;
&lt;script&gt;
  var xhr = new XMLHttpRequest();
  xhr.open('get', 'https://v1.hitokoto.cn');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      var data = JSON.parse(xhr.responseText);
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto;
    }
  }
  xhr.send();
&lt;/script&gt;

&lt;!-- 新 API 方法， 十分简洁 --&gt;
&lt;script src=&quot;https://v1.hitokoto.cn/?encode=js&amp;select=%23hitokoto&quot; defer&gt;&lt;/script&gt;</code></pre>
            <br />
            <h5>网易云 API 使用示例</h5>
            <pre><code language="javascript">// 本示例需要浏览器支持 Promise 以及 fetch. 若需要全部浏览器支持， 请参考一言示例引用 bluebird 和 fetch.
function fetch163Playlist(playlist_id) {
  return new Promise(function (ok, err) {
    fetch("https://v1.hitokoto.cn/nm/playlist/" + playlist_id)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        var arr = [];
        data.playlist.tracks.map(function (value) {
          arr.push(value.id);
        });
        return arr;
      })
      .then(function (ids) {
        return fetch163Songs(ids);
      })
      .then(function (data) {
        ok(data);
      })
      .catch(function (e) {
        err(e);
      });
  })
}

function fetch163Songs(IDS) {
  var ids;
  switch (typeof IDS) {
  case 'number':
    ids = [IDS];
    break;
  case 'object':
    if (!Array.isArray(IDS)) {
      return new Error("Please enter array or number");
    }
    ids = IDS;
    break;
  default:
    return new Error("Please enter array or number");
    break;
  }
  return new Promise(function (ok, err) {
    fetch("https://v1.hitokoto.cn/nm/summary/" + ids.join(",") + "?lyric=true&common=true")
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        var songs = [];
        data.songs.map(function (song) {
          songs.push({
            name: song.name,
            url: song.url,
            artist: song.artists.join("/"),
            album: song.album.name,
            pic: song.album.picture,
            lrc: song.lyric
          });
        });
        return songs;
      })
      .then(function (result) {
        ok(result);
      })
      .catch(function (e) {
        err(e);
      });
  });
}

// 使用测试
fetch163Playlist(2158283120)
  .then(function (data) {
    console.log(data);
  })
  .catch(function (err) {
    console.error(err);
  })
fetch163Songs([28391863, 22640061])
  .then(function (data) {
    console.log(data);
  })
  .catch(function (err) {
    console.error(err);
  })</code><pre>
            <h4>6、 扩展</h4>
            <p>网易云 API， 目前文档尚未制作，可以先参考 <a href="https://github.com/a632079/teng-koa/blob/master/netease.md">Github</a></p>
            </div>
        </div>
        <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer--left-section">
                萌创团队 版权所有
            </div>
        </footer>
@stop
