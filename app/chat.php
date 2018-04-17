<style>

    .chatbox__control {
        margin: 10px 10px 10px auto;
    }

    .button-chat {
        position: relative;
        display: block;
        padding: 5px 12px;
        border-width: 0;
        outline: none;
        border-radius: 2px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
        background-color: #afafaf;
        color: #ecf0f1;
        transition: background-color .3s;
    }

    .button-close {
        float: right;
    }

    .chatbox-temp {
        min-height: 350px;
        width: 350px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    #reveal-chat {
        width: 350px;
    } 

    .chatbox__header-temp {
      width:  350px;
      height: 50px;
      background: #ff9966;
      /* fallback for old browsers */
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to left, #ff5e62, #ff9966);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bottom-right{
        position: fixed;
        bottom: 0;
        right:  0;
        z-index: 5;
    }

    h1 {
      color: white;
      font-size: 3em;
    }

    * {
      box-sizing: border-box;
      position: relative;
      font-family: 'Dosis', sans-serif !important;
    }

    .chatbox {
      background: #fafafa;
      min-height: 350px;
      width: 350px;
      box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.21), 0px 30px 20px -10px rgba(0, 0, 0, 0.2), 0px 60px 20px -30px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }
    .chatbox__header {
      width: 100%;
      height: 50px;
      background: #ff9966;
      /* fallback for old browsers */
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to left, #ff5e62, #ff9966);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .chatbox__header .title {
      color: #fff;
      margin-left: 10px;
      text-align: left;
    }
    .chatbox__header svg {
      position: absolute;
      left: 20px;
      fill: white;
      transition: .3s ease-in-out;
    }
    .chatbox__header svg:hover {
      -webkit-transform: translateX(-5px);
              transform: translateX(-5px);
      transition: .3s ease-in-out;
    }
    .chatbox__body {
      height: 290px;
      width: 100%;
      background: #f5f5f5;
      display: flex;
      flex-direction: column-reverse;
      overflow: auto;
      padding: 10px 10px 20px;
    }
    .chatbox__body .message {
      display: block;
      width: auto;
      margin: 5px;
      align-self: flex-start;
      flex-direction: row;
      max-width: 60%;
      word-wrap: break-word;
    }
    .chatbox__body .message img {
      width: 30px;
      height: 30px;
      border-radius: 15px;
      -webkit-animation: image 0.2s;
      /* Safari 4.0 - 8.0 */
      animation: image 0.2s;
    }
    .chatbox__body .message.receive {
      padding-left: 30px;
    }
    .chatbox__body .message.receive .message_text {
      margin-left: 10px;
      padding: 10px;
      border-radius: 3px;
      background: #fff;
      animation: starkMessage .2s;
      -webkit-animation: starkMessage 0.2s;
      /* Safari 4.0 - 8.0 */
    }
    .chatbox__body .message.receive .message_text:before {
      position: absolute;
      content: " ";
      left: -5px;
      bottom: 0;
      border-right: solid 10px #fff;
      border-top: solid 10px transparent;
      z-index: 0;
    }
    .chatbox__body .message.receive img {
      position: absolute;
      left: 0;
      bottom: -15px;
    }
    .chatbox__body .message.sender {
      color: white;
      align-self: flex-end;
      padding-right: 30px;
    }
    .chatbox__body .message.sender .message_text {
      margin-right: 10px;
      background: #ff9966;
      background: linear-gradient(to left, #ff5e62, #ff9966);
      padding: 10px;
      border-radius: 3px;
      z-index: 99;
      animation: starkMessage .2s;
      -webkit-animation: starkMessage 0.2s;
      /* Safari 4.0 - 8.0 */
    }
    .chatbox__body .message.sender .message_text:after {
      position: absolute;
      content: " ";
      right: -5px;
      bottom: 0;
      border-left: solid 10px #ff5e62;
      border-top: solid 10px transparent;
      z-index: 0;
    }
    .chatbox__body .message.sender img {
      position: absolute;
      right: 0;
      bottom: -15px;
    }
    .chatbox__input {
      display: flex;
      width: 100%;
      background: #fff;
      height: 60px;
      border-top: .5px solid #efefef;
    }
    .chatbox__input input {
      flex: 3;
      padding: 1em 2em;
      outline: none;
      border: 0;
      letter-spacing: .1em;
    }
    .chatbox__input button {
      outline: none;
      border: 0;
      flex: 1;
      background: white;
    }
    .chatbox__input svg {
      fill: #ff9966;
    }

    ::-webkit-input-placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #dedede;
      opacity: 1;
      /* Firefox */
    }

    :-ms-input-placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #dedede;
      opacity: 1;
      /* Firefox */
    }

    ::-ms-input-placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #dedede;
      opacity: 1;
      /* Firefox */
    }

    ::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #dedede;
      opacity: 1;
      /* Firefox */
    }

    @-webkit-keyframes starkMessage {
      from {
        -webkit-transform: scale(0.9);
                transform: scale(0.9);
      }
      80% {
        -webkit-transform: scale(1.05);
                transform: scale(1.05);
      }
      to {
        -webkit-transform: scale(1);
                transform: scale(1);
      }
    }

    @keyframes starkMessage {
      from {
        -webkit-transform: scale(0.9);
                transform: scale(0.9);
      }
      80% {
        -webkit-transform: scale(1.05);
                transform: scale(1.05);
      }
      to {
        -webkit-transform: scale(1);
                transform: scale(1);
      }
    }
    @-webkit-keyframes image {
      from {
        bottom: -50px;
      }
      to {
        bottom: -15px;
      }
    }
    @keyframes image {
      from {
        bottom: -50px;
      }
      to {
        bottom: -15px;
      }
    }

</style>

<div class = 'chatbox-temp bottom-right'>
    <div id = "reveal-chat" class='chatbox__header bottom-right' >
        <div class='title'>
          Speak to a Friendly Technician
        </div>
        <div class = "chatbox__control">
            <button class=' button-chat button-open'>^</button>
        </div>
  </div>
</div>

<div class='chatbox bottom-right'>
  <div class='chatbox__header' >
    <div class='title'>
      Friendly Technician
    </div>

    <div class = "chatbox__control">
        <button class='button-chat button-close'"'>&times;</button>
    </div>

  </div>
  <div class='chatbox__body'>
    <div class='message receive'>
      <img src='assets/images/emojis/smile2.jpg'>
      <div class='message_text'>
        Hello there, need assistance?
      </div>
    </div>
  </div>
  <div class='chatbox__input'>
    <input id='chat_input' placeholder='Type something here'>
    <button onclick="send()">
      <svg height='24' viewbox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'>
        <path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'></path>
      </svg>
    </button>
  </div>
</div>

<script>
    var send = document.querySelector('.chatbox__input svg');
    var body = document.querySelector('.chatbox__body')
    var input = document.querySelector('#chat_input');
    var chatControl = document.querySelector('#chat_input');
    var close = document.querySelector('.button-close');
    var open = document.querySelector('.button-open');
    var chatbox = document.querySelector('.chatbox');
    var revealer = document.querySelector('#reveal-chat');

    function hide(element) {
        element.style.opacity = 0;
        element.style.zIndex = -1;
    }

    function show(element) {
        element.style.opacity = 1;
        element.style.zIndex = 9;
    }

    open.addEventListener('click', function(e){
        var className = chatbox.className;
        var replaced = className.replace(/hide/g, "");
        replaced = replaced.replace(/show/g, "");
        className = replaced + " show";
        chatbox.className = className;
        console.log(className);
        revealer.style.zIndex = 2;
        [].forEach.call(document.querySelectorAll('.show'), function (el) {
            show(el);
        });
    },false);

    close.addEventListener('click', function(e){
        var className = chatbox.className;
        var replaced = className.replace(/hide/g, "");
        replaced = replaced.replace(/show/g, "");
        className = replaced + ' hide';
        chatbox.className = className;
        console.log(className);
        revealer.style.zIndex = 9;
        console.log(revealer.style);
        [].forEach.call(document.querySelectorAll('.hide'), function (el) {
            hide(el);
        });
    },false);


    var senderPictureSrc = "assets/images/noProfile.png";
    var replyPicture = "assets/images/emojis/smile2.jpg"

    var messageController = (function(){
      
      var starkQuotes = [
        "I TOLD YOU. I DON’T WANT TO JOIN YOUR SUPER-SECRET BOY BAND.",
        "I LOVED YOU IN A ‘A CHRISTMAS STORY’.",
        "WELL, PERFORMANCE ISSUES, IT’S NOT UNCOMMON. ONE OUT OF FIVE…",
        "I’M A HUGE FAN OF THE WAY YOU LOSE CONTROL AND TURN INTO AN ENORMOUS GREEN RAGE MONSTER.",
        "HOW DO YOU GO TO THE BATHROOM IN THE SUIT?” [LONG PAUSE.] “JUST LIKE THAT.",
        "DOTH MOTHER KNOW YOU WEARETH HER DRAPES.",
        "SOMETIMES YOU GOTTA RUN BEFORE YOU CAN WALK.",
        "HAVE YOU EVER TRIED SHAWARMA… I DON’T KNOW WHAT IT IS, BUT I WANNA TRY IT.",
        "IF THERE’S ONE THING I’VE PROVEN IT’S THAT YOU CAN COUNT ON ME TO PLEASURE MYSELF.",
        "WE HAVE A HULK.",
        "GENIUS, BILLIONAIRE, PLAYBOY, PHILANTHROPIST.",
        "I AM IRON MAN"
      ];
      
      return {
        sendMessage: function(){
          var message_container = document.createElement("div");
          var message = `<img src="`+ senderPictureSrc + `"/>
          <div class="message_text"> ${input.value} </div>`;
          message_container.className = "message sender";
          message_container.innerHTML = message;      
          body.insertBefore(message_container, body.firstChild);
          input.value = "";
        },
        starkReply: function(){
          var reply = starkQuotes[Math.floor(Math.random() * starkQuotes.length-1) + 1];
          var message_container = document.createElement("div");
          var message = `<img class = "chat-img" src="` + replyPicture + `"/>
          <div class="message_text"> ${reply} </div>`;
          message_container.className = "message receive";
          message_container.innerHTML = message;      
          body.insertBefore(message_container, body.firstChild);
        }
      }
    })();

    var init = (function(messageController){
      ['click', 'keyup'].forEach(event => document.addEventListener(event, handler));
      
      function handler(e){
        if(e.target == send  || e.keyCode == 13 ){
            messageController.sendMessage();
            setTimeout(messageController.starkReply, 1000);
        }
      }

    })(messageController);

    function send() {
        messageController.sendMessage();
        setTimeout(messageController.starkReply, 1000);
    }
</script>