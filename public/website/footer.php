        <footer>
            <div class="footer-item">
                <p>
                    <a href="https://www.vecteezy.com/members/laimuilin18">Art work by laimuilin18</a>
                </p>
                <p>
                    <img src="/assets/dumbdog.png" alt="dumb-dog">
                    <a href="https://github.com/kytschi/dumb-dog" target="_blank">Powered by Dumb Dog</a>
                </p>
            </div>
            <div class="footer-item float-right">
                <a href="/sitemap" class="button"><span>sitemap</span></a>
                <a href="/privacy" class="button"><span>privacy</span></a>
            </div>
        </footer>
    </main>
    <div id="quick-menu-button" class="quick-button" onclick="showQuickMenu()">
        <img src="/website/assets/gravy-menu.jpg">
    </div>
    <div id="quick-menu" style="display: none">
        <a href="/pour-some-gravy" class="quick-button" title="Pour some gravy">
            <img src="/website/assets/gravy-spoon.jpg">
        </a>
        <a href="/gravys" class="quick-button" title="Gravys">
            <img src="/website/assets/gravy-boat.jpg">
        </a>
        <a href="/" class="quick-button" title="Home please">
            <img src="/website/assets/gravy-home.jpg">
        </a>
    </div>
</body>
    <script type="text/javascript">
        function showQuickMenu() {
            if (document.getElementById('quick-menu').style.display == 'none') {
                document.getElementById('quick-menu').style.display = 'block';
            } else {
                document.getElementById('quick-menu').style.display = 'none';
            }
        }
        </script>
</html>