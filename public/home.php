<?php

function interesting(){
  echo '<div class="font-bold text-lg mt-1">Trending voor jou</div>
  <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 mt-3">
  <div class="flex justify-between">
    <div class="flex justify-between items-center">
      <div>
        <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1503591435324563456/foUrqiEw_400x400.jpg">
      </div>
      <div class="ml-3">
        <div class="font-bold">Elon Musk</div>
        <div class="text-sm text-gray-600">@elonmusk</div>
      </div>
    </div>
    <div>
      <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
    </div>
  </div>
</div>
<div class="cursor-pointer hover:bg-gray-100 transition-all py-3">
  <div class="flex justify-between">
    <div class="flex justify-between items-center">
      <div>
        <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1502460634088108039/w0tYONuk_400x400.jpg">
      </div>
      <div class="ml-3">
        <div class="font-bold">Snoop Dogg</div>
        <div class="text-sm text-gray-600">@SnoopDogg</div>
      </div>
    </div>
    <div>
      <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
    </div>
  </div>
</div>
<div class="cursor-pointer hover:bg-gray-100 transition-all py-3">
  <div class="flex justify-between">
    <div class="flex justify-between items-center">
      <div>
        <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/760478349198258178/ADaMUQSF_400x400.jpg">
      </div>
      <div class="ml-3">
        <div class="font-bold">Politie Basisteam Ede</div>
        <div class="text-sm text-gray-600">@POL_Ede</div>
      </div>
    </div>
    <div>
      <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
    </div>
  </div>
</div>';
}

function media(){
  echo "<div class='text-3xl font-bold'>@KlaasPieterse heeft geen foto's of video's getweet</div>
  <div class='text-gray-500'>Wanneer ze dat wel doen, verschijnen hun media hier.</div>";
}

function what_i_like(){
  echo '<div class="text-3xl font-bold">@KlaasPieterse heeft geen Tweets leuk gevonden</div>
  <div class="text-gray-500">Wanneer ze dat wel doen, verschijnen die Tweets hier.</div>';
}

if(isset($_POST['tweets'])){
  return interesting();
}

if(isset($_POST['media'])){
  return media();
}

if(isset($_POST['what-i-like'])){
  return what_i_like();
}

?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
 <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
  <div class="container mx-auto flex justify-center">
    <div class="flex flex-wrap gap-10 ml-10">
      <div class="mt-1 relative w-60">
        <div class="flex flex-col mt-2 gap-5 fixed">
          <div class="ml-2"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8 cursor-pointer hover:bg-gray-200"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z" fill="#1d9bf0"></path></g></svg></div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M22.46 7.57L12.357 2.115c-.223-.12-.49-.12-.713 0L1.543 7.57c-.364.197-.5.652-.303 1.017.135.25.394.393.66.393.12 0 .243-.03.356-.09l.815-.44L4.7 19.963c.214 1.215 1.308 2.062 2.658 2.062h9.282c1.352 0 2.445-.848 2.663-2.087l1.626-11.49.818.442c.364.193.82.06 1.017-.304.196-.363.06-.818-.304-1.016zm-4.638 12.133c-.107.606-.703.822-1.18.822H7.36c-.48 0-1.075-.216-1.178-.798L4.48 7.69 12 3.628l7.522 4.06-1.7 12.015z"></path><path d="M8.22 12.184c0 2.084 1.695 3.78 3.78 3.78s3.78-1.696 3.78-3.78-1.695-3.78-3.78-3.78-3.78 1.696-3.78 3.78zm6.06 0c0 1.258-1.022 2.28-2.28 2.28s-2.28-1.022-2.28-2.28 1.022-2.28 2.28-2.28 2.28 1.022 2.28 2.28z"></path></g></svg>Startpagina</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M21 7.337h-3.93l.372-4.272c.036-.412-.27-.775-.682-.812-.417-.03-.776.27-.812.683l-.383 4.4h-6.32l.37-4.27c.037-.413-.27-.776-.68-.813-.42-.03-.777.27-.813.683l-.382 4.4H3.782c-.414 0-.75.337-.75.75s.336.75.75.75H7.61l-.55 6.327H3c-.414 0-.75.336-.75.75s.336.75.75.75h3.93l-.372 4.272c-.036.412.27.775.682.812l.066.003c.385 0 .712-.295.746-.686l.383-4.4h6.32l-.37 4.27c-.036.413.27.776.682.813l.066.003c.385 0 .712-.295.746-.686l.382-4.4h3.957c.413 0 .75-.337.75-.75s-.337-.75-.75-.75H16.39l.55-6.327H21c.414 0 .75-.336.75-.75s-.336-.75-.75-.75zm-6.115 7.826h-6.32l.55-6.326h6.32l-.55 6.326z"></path></g></svg>Verkennen</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M21.697 16.468c-.02-.016-2.14-1.64-2.103-6.03.02-2.532-.812-4.782-2.347-6.335C15.872 2.71 14.01 1.94 12.005 1.93h-.013c-2.004.01-3.866.78-5.242 2.174-1.534 1.553-2.368 3.802-2.346 6.334.037 4.33-2.02 5.967-2.102 6.03-.26.193-.366.53-.265.838.102.308.39.515.712.515h4.92c.102 2.31 1.997 4.16 4.33 4.16s4.226-1.85 4.327-4.16h4.922c.322 0 .61-.206.71-.514.103-.307-.003-.645-.263-.838zM12 20.478c-1.505 0-2.73-1.177-2.828-2.658h5.656c-.1 1.48-1.323 2.66-2.828 2.66zM4.38 16.32c.74-1.132 1.548-3.028 1.524-5.896-.018-2.16.644-3.982 1.913-5.267C8.91 4.05 10.397 3.437 12 3.43c1.603.008 3.087.62 4.18 1.728 1.27 1.285 1.933 3.106 1.915 5.267-.024 2.868.785 4.765 1.525 5.896H4.38z"></path></g></svg>Meldingen</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M19.25 3.018H4.75C3.233 3.018 2 4.252 2 5.77v12.495c0 1.518 1.233 2.753 2.75 2.753h14.5c1.517 0 2.75-1.235 2.75-2.753V5.77c0-1.518-1.233-2.752-2.75-2.752zm-14.5 1.5h14.5c.69 0 1.25.56 1.25 1.25v.714l-8.05 5.367c-.273.18-.626.182-.9-.002L3.5 6.482v-.714c0-.69.56-1.25 1.25-1.25zm14.5 14.998H4.75c-.69 0-1.25-.56-1.25-1.25V8.24l7.24 4.83c.383.256.822.384 1.26.384.44 0 .877-.128 1.26-.383l7.24-4.83v10.022c0 .69-.56 1.25-1.25 1.25z"></path></g></svg>Berichten</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M19.9 23.5c-.157 0-.312-.05-.442-.144L12 17.928l-7.458 5.43c-.228.164-.53.19-.782.06-.25-.127-.41-.385-.41-.667V5.6c0-1.24 1.01-2.25 2.25-2.25h12.798c1.24 0 2.25 1.01 2.25 2.25v17.15c0 .282-.158.54-.41.668-.106.055-.223.082-.34.082zM12 16.25c.155 0 .31.048.44.144l6.71 4.883V5.6c0-.412-.337-.75-.75-.75H5.6c-.413 0-.75.338-.75.75v15.677l6.71-4.883c.13-.096.285-.144.44-.144z"></path></g></svg>Bladwijzers</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M19.75 22H4.25C3.01 22 2 20.99 2 19.75V4.25C2 3.01 3.01 2 4.25 2h15.5C20.99 2 22 3.01 22 4.25v15.5c0 1.24-1.01 2.25-2.25 2.25zM4.25 3.5c-.414 0-.75.337-.75.75v15.5c0 .413.336.75.75.75h15.5c.414 0 .75-.337.75-.75V4.25c0-.413-.336-.75-.75-.75H4.25z"></path></g></svg>Lijsten</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><path d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"></path></g></svg>Profiel</div>
          <div class="flex items-center font-base text-xl text-gray-700 gap-4 p-2 rounded-full -mt-2 hover:bg-gray-200 cursor-pointer transition-all w-52"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-8"><g><circle cx="17" cy="12" r="1.5"></circle><circle cx="12" cy="12" r="1.5"></circle><circle cx="7" cy="12" r="1.5"></circle><path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path></g></svg>Meer</div>
          <button class="bg-sky-500 font-bold w-full py-3 text-white rounded-full text-md transition-all hover:bg-sky-600 shadow-lg">Tweeten</button>
        </div>
        <div class="fixed bottom-0 mb-3">
        <div class="cursor-pointer hover:bg-gray-100 transition-all w-60 py-3 px-5 mt-3 rounded-full logout-div hidden">
          <div class="flex justify-between items-center">
            Logout
          </div>
        </div>
        <div class="cursor-pointer hover:bg-gray-100 transition-all w-60 py-3 px-5 mt-3 rounded-full" onclick="document.querySelector('.logout-div').classList.toggle('hidden')">
          <div class="flex justify-between items-center">
            <div class="flex justify-between items-center">
              <div>
                <img class="w-12 rounded-full" src="https://www.influxdata.com/wp-content/uploads/CSGO-logo.jpg">
              </div>
              <div class="ml-3">
                <div class="font-bold">John Doe</div>
                <div class="text-sm text-gray-600">@johndoe</div>
              </div>
            </div>
            <div>
              <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="border-l border-r border-gray-100" style="width: 35em">
        <div class="fixed bg-white z-50 cursor-pointer flex pb-2" style="width: 34.9em">
          <div class="pl-5 pr-3 mr-5 mt-5">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 content-center">
              <g>
                <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z"></path>
              </g>
            </svg>
          </div>
          <div class="flex flex-col">
            <div class="font-bold text-xl mt-1">
              Klaas Pieterse
            </div>
            <div class="font-medium text-xs text-gray-500">
              0 Tweets
            </div>
          </div>
        </div>
        <div class="h-52 w-full" style="background-color: #cfd9de;"></div>
        <div><img class="w-36 absolute -mt-16 ml-6 rounded-full border-4 border-white" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_400x400.png"></div>
        <div class="flex justify-end p-4">
          <div class="flex gap-2">
            <div class="border rounded-full flex items-center p-2"><svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg></div>
            <div><button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button></div>
          </div>
        </div>
        <div class="mt-6 px-5 flex flex-col">
            <div class="font-bold text-xl">Klaas Pieterse</div>
            <div class="text-gray-500 text-sm">@KlaasPieterse</div>
            <div class="flex mt-3 gap-1">
              <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><path fill="#606060" d="M19.708 2H4.292C3.028 2 2 3.028 2 4.292v15.416C2 20.972 3.028 22 4.292 22h15.416C20.972 22 22 20.972 22 19.708V4.292C22 3.028 20.972 2 19.708 2zm.792 17.708c0 .437-.355.792-.792.792H4.292c-.437 0-.792-.355-.792-.792V6.418c0-.437.354-.79.79-.792h15.42c.436 0 .79.355.79.79V19.71z"></path><circle fill="#606060" cx="7.032" cy="8.75" r="1.285"></circle><circle fill="#606060" cx="7.032" cy="13.156" r="1.285"></circle><circle fill="#606060" cx="16.968" cy="8.75" r="1.285"></circle><circle fill="#606060" cx="16.968" cy="13.156" r="1.285"></circle><circle fill="#606060" cx="12" cy="8.75" r="1.285"></circle><circle fill="#606060" cx="12" cy="13.156" r="1.285"></circle><circle fill="#606060" cx="7.032" cy="17.486" r="1.285"></circle><circle fill="#606060" cx="12" cy="17.486" r="1.285"></circle></g></svg>
              <div class="text-gray-600 text-sm">Lid geworden in juli 2012</div>
            </div>
            <div class="flex mt-3 gap-6">
              <div class="flex">
                <span class="font-semibold">30</span><div class="ml-1 text-gray-500">Volgend</div>
              </div>
              <div class="flex">
                <span class="font-semibold">0</span><div class="ml-1 text-gray-500">Volgers</div>
              </div>  
            </div>
            <div class="text-gray-500 text-sm mt-3">Niet gevold door iemand die jij volgt</div>
        </div>
        <div class="flex w-full justify-between mt-4 text-center cursor-pointer border-b">
          <div class="hover:bg-gray-100 grow py-4 transition-all font-semibold tab-button" name="tweets" onclick="parameter(this); tab_info(this, 'tweets', 'index.php')">Tweets</div>
          <div class="whitespace-nowrap grow hover:bg-gray-100 py-4 font-semibold transition-all tab-button" name="tweets" onclick="parameter(this); tab_info(this, 'tweets', 'index.php')">Tweets en antwoorden</div>
          <div class="hover:bg-gray-100 grow py-4 transition-all font-semibold tab-button" name="media" onclick="parameter(this); tab_info(this, 'media', 'index.php')">Media</div>
          <div class="hover:bg-gray-100 grow py-4 transition-all font-semibold tab-button" name="what-i-like" onclick="parameter(this); tab_info(this, 'what-i-like', 'index.php')">Vind-ik-leuks</div>
        </div>

        <div id="post-data-outlet" class="p-2 px-4">
          <?php 
            if(!isset($_GET['t'])){
              interesting();
            } else {
              for($x = 0; $x < 3; $x++){
                echo '<div class="border shadow rounded-md p-4 mt-3 w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                  <div class="rounded-full bg-slate-200 h-10 w-10"></div>
                  <div class="flex-1 space-y-6 py-1">
                    <div class="h-2 bg-slate-200 rounded"></div>
                    <div class="space-y-3">
                      <div class="grid grid-cols-3 gap-4">
                        <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                        <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                      </div>
                      <div class="h-2 bg-slate-200 rounded"></div>
                    </div>
                  </div>
                </div>
              </div>';
              }
            }
          ?>
        </div>
      </div>

      <div class="mt-1.5 relative w-96">
        <div class="fixed">
        <div class="flex items-center">
          <div class="absolute ml-6">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4"><g><path fill="#606060" d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
          </div>
          <input type="text" class="bg-gray-100 px-2 py-3 w-96 rounded-full outline-none focus:border-sky-500 focus:bg-white border-white border pl-14 placeholder:text-gray-500 text-sm" placeholder="Zoeken door Twitter">
        </div>
        <div class="bg-gray-50 w-96 mt-5 rounded-xl">
          <div>
            <div class="flex justify-between py-3 px-6">
              <div class="font-bold text-lg">Dit vind je misschien leuk</div>
            </div>
            <div class="flex flex-col">
            <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
              <div class="flex justify-between">
                <div class="flex justify-between items-center">
                  <div>
                    <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1503591435324563456/foUrqiEw_400x400.jpg">
                  </div>
                  <div class="ml-3">
                    <div class="font-bold">Elon Musk</div>
                    <div class="text-sm text-gray-600">@elonmusk</div>
                  </div>
                </div>
                <div>
                  <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
                </div>
              </div>
            </div>
            <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
              <div class="flex justify-between">
                <div class="flex justify-between items-center">
                  <div>
                    <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/1502460634088108039/w0tYONuk_400x400.jpg">
                  </div>
                  <div class="ml-3">
                    <div class="font-bold">Snoop Dogg</div>
                    <div class="text-sm text-gray-600">@SnoopDogg</div>
                  </div>
                </div>
                <div>
                  <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
                </div>
              </div>
            </div>
            <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
              <div class="flex justify-between">
                <div class="flex justify-between items-center">
                  <div>
                    <img class="w-12 rounded-full" src="https://pbs.twimg.com/profile_images/760478349198258178/ADaMUQSF_400x400.jpg">
                  </div>
                  <div class="ml-3">
                    <div class="font-bold">Politie Basisteam Ede</div>
                    <div class="text-sm text-gray-600">@POL_Ede</div>
                  </div>
                </div>
                <div>
                  <button class="bg-black p-2 rounded-full text-white font-semibold px-4 text-sm">Volgen</button>
                </div>
              </div>
            </div>
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 pb-4 px-6 rounded-lg">
                <button class="text-sky-500">Meer weergeven</button>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 w-96 mt-5 rounded-xl">
          <div>
            <div class="flex justify-between py-3 px-6">
              <div class="font-bold text-lg">Trending voor jou</div>
              <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><path d="M12 8.21c-2.09 0-3.79 1.7-3.79 3.79s1.7 3.79 3.79 3.79 3.79-1.7 3.79-3.79-1.7-3.79-3.79-3.79zm0 6.08c-1.262 0-2.29-1.026-2.29-2.29S10.74 9.71 12 9.71s2.29 1.026 2.29 2.29-1.028 2.29-2.29 2.29z"></path><path d="M12.36 22.375h-.722c-1.183 0-2.154-.888-2.262-2.064l-.014-.147c-.025-.287-.207-.533-.472-.644-.286-.12-.582-.065-.798.115l-.116.097c-.868.725-2.253.663-3.06-.14l-.51-.51c-.836-.84-.896-2.154-.14-3.06l.098-.118c.186-.222.23-.523.122-.787-.11-.272-.358-.454-.646-.48l-.15-.014c-1.18-.107-2.067-1.08-2.067-2.262v-.722c0-1.183.888-2.154 2.064-2.262l.156-.014c.285-.025.53-.207.642-.473.11-.27.065-.573-.12-.795l-.094-.116c-.757-.908-.698-2.223.137-3.06l.512-.512c.804-.804 2.188-.865 3.06-.14l.116.098c.218.184.528.23.79.122.27-.112.452-.358.477-.643l.014-.153c.107-1.18 1.08-2.066 2.262-2.066h.722c1.183 0 2.154.888 2.262 2.064l.014.156c.025.285.206.53.472.64.277.117.58.062.794-.117l.12-.102c.867-.723 2.254-.662 3.06.14l.51.512c.836.838.896 2.153.14 3.06l-.1.118c-.188.22-.234.522-.123.788.112.27.36.45.646.478l.152.014c1.18.107 2.067 1.08 2.067 2.262v.723c0 1.183-.888 2.154-2.064 2.262l-.155.014c-.284.024-.53.205-.64.47-.113.272-.067.574.117.795l.1.12c.756.905.696 2.22-.14 3.06l-.51.51c-.807.804-2.19.864-3.06.14l-.115-.096c-.217-.183-.53-.23-.79-.122-.273.114-.455.36-.48.646l-.014.15c-.107 1.173-1.08 2.06-2.262 2.06zm-3.773-4.42c.3 0 .593.06.87.175.79.328 1.324 1.054 1.4 1.896l.014.147c.037.4.367.7.77.7h.722c.4 0 .73-.3.768-.7l.014-.148c.076-.842.61-1.567 1.392-1.892.793-.33 1.696-.182 2.333.35l.113.094c.178.148.366.18.493.18.206 0 .4-.08.546-.227l.51-.51c.284-.284.305-.73.048-1.038l-.1-.12c-.542-.65-.677-1.54-.352-2.323.326-.79 1.052-1.32 1.894-1.397l.155-.014c.397-.037.7-.367.7-.77v-.722c0-.4-.303-.73-.702-.768l-.152-.014c-.846-.078-1.57-.61-1.895-1.393-.326-.788-.19-1.678.353-2.327l.1-.118c.257-.31.236-.756-.048-1.04l-.51-.51c-.146-.147-.34-.227-.546-.227-.127 0-.315.032-.492.18l-.12.1c-.634.528-1.55.67-2.322.354-.788-.327-1.32-1.052-1.397-1.896l-.014-.155c-.035-.397-.365-.7-.767-.7h-.723c-.4 0-.73.303-.768.702l-.014.152c-.076.843-.608 1.568-1.39 1.893-.787.326-1.693.183-2.33-.35l-.118-.096c-.18-.15-.368-.18-.495-.18-.206 0-.4.08-.546.226l-.512.51c-.282.284-.303.73-.046 1.038l.1.118c.54.653.677 1.544.352 2.325-.327.788-1.052 1.32-1.895 1.397l-.156.014c-.397.037-.7.367-.7.77v.722c0 .4.303.73.702.768l.15.014c.848.078 1.573.612 1.897 1.396.325.786.19 1.675-.353 2.325l-.096.115c-.26.31-.238.756.046 1.04l.51.51c.146.147.34.227.546.227.127 0 .315-.03.492-.18l.116-.096c.406-.336.923-.524 1.453-.524z"></path></g></svg>
            </div>
            <div class="flex flex-col">
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
                <div class="flex justify-between">
                  <div class="text-xs text-gray-600">Trending in Nederland</div>
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
                </div>
                <div class="font-semibold">Medewerker Rusland</div>
              </div>
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
                <div class="flex justify-between">
                  <div class="text-xs text-gray-600">Trending in Nederland</div>
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
                </div>
                <div class="font-semibold">Het OMT</div>
                <div class="text-xs text-gray-600">1,024 Tweets</div>
              </div>
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
                <div class="flex justify-between">
                  <div class="text-xs text-gray-600">Trending in Nederland</div>
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
                </div>
                <div class="font-semibold">McDonald</div>
                <div class="text-xs text-gray-600">Trending with <span class="text-sky-500 hover:underline">Robje</span></div>
              </div>
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 px-6">
                <div class="flex justify-between">
                  <div class="text-xs text-gray-600">Trending in Nederland</div>
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
                </div>
                <div class="font-semibold">Medewerker Rusland</div>
                <div class="text-xs text-gray-600">2,495 Tweets</div>
              </div>
              <div class="cursor-pointer hover:bg-gray-100 transition-all py-3 pb-4 px-6 rounded-lg">
                <button class="text-sky-500">Laad meer</button>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap pt-5 px-2 text-xs text-gray-700 gap-2 w-96">
          <a href="#" class="hover:underline">Terms of Service</a>
          <a href="#" class="hover:underline">Privacy Policy</a>
          <a href="#" class="hover:underline">Cookie Policy</a>
          <a href="#" class="hover:underline">Accessibility</a>
          <a href="#" class="hover:underline">Ads info</a>
          <a href="#" class="hover:underline flex flex-wrap">More
            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-3 ml-1 mt-0.5"><g><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></g></svg>
          </a>
        </div>
        <a href="#" class="px-2 pt-1 text-xs text-gray-700 hover:underline">© 2022 Twitter, Inc.</a>
      </div>
    </div>
    </div>
  </div>

  <script>
        function post(data, url, success){
            var xhr = new XMLHttpRequest();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if(xhr.readyState == 4 && xhr.status == 200) {
                    success.innerHTML = this.responseText;
                }
            }
            xhr.send(data);
        }

        function parameter(target){
          if(target != null){
            if(target.textContent == "Tweets"){
              history.replaceState && history.replaceState(
                null, '', location.pathname + location.search.replace(/[\?&]t=[^&]+/, '').replace(/^&/, '?') + location.hash
              );
            } else {
              window.history.replaceState(null, null, "?t=" + target.textContent);
            }
          } else {
            var url = new URL(window.location.href);
            if(url.searchParams.get("t")){
              var elements = document.getElementsByClassName("tab-button");
              var target = "";
              var data = "";
              for(var x = 0; x < elements.length; x++){
                if(elements[x].textContent == url.searchParams.get("t")){
                  target = elements[x];
                  data = elements[x].getAttribute('name');
                }
              }
              tab_info(target, data, 'index.php');
            } else {
              document.getElementsByClassName("tab-button")[0].classList.remove("font-semibold")
              document.getElementsByClassName("tab-button")[0].classList.add("font-bold")
            }
          }
        }
        parameter(null)

        function tab_info(target, data, url){
          var elements = document.getElementsByClassName("tab-button");
            for(var x = 0; x < elements.length; x++){
              if(elements[x].textContent == target.textContent){
                if(!elements[x].className.includes("font-bold")){
                  elements[x].classList.add("font-bold");
                  elements[x].classList.remove("font-semibold");
                }
              } else {
                if(elements[x].className.includes("font-bold")){
                  elements[x].classList.remove("font-bold");
                  elements[x].classList.add("font-semibold");
                }
              }
            }

          post(data, url, document.getElementById("post-data-outlet"))
        }
    </script>

  <script src="../assets/functions.js"></script>
</body>
</html>