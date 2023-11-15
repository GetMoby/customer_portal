window.$crisp = [];
window.CRISP_WEBSITE_ID = "e044823b-9247-4d4c-a53d-79721b8b91d3";
(function () {
  d = document;
  s = d.createElement("script");
  s.src = "https://client.crisp.chat/l.js";
  s.async = 1;
  d.getElementsByTagName("head")[0].appendChild(s);
})();

$crisp.push(["on", "message:sent", updateCrispSegments]);

function updateCrispSegments() {
  $crisp.push(["set", "session:segments", [["portal"]]]);
}