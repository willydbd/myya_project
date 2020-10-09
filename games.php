<?php
// ob_start();
// session_start();
// if (!isset($_SESSION["login"])) header("Location: /?attention=You must be logged in to play games");
require_once "assets/includes/nav.php";

?>
    <script>
        document.title = "Games - MYYA"
    </script>

    <div class="game-cn">
        <div class="game-welcome">
            <h3>Welcome To Myya Map Games</h3>
            <div class="text-center"><a href="quiz.php" class="btn btn-lg" id="quiz">PLAY MACARDS QUIZ</a></div>
        </div>
        <div class="game-container" style="margin: 5px auto !important;">
            <div class="canvas">
            </div>
            <div class="real-image-cn">
                <div class="game-description">
                    <div class="map-cn">
                        <label for="map">Select Map</label>
                        <select name="" id="" class="map-type">
                       <option value="Nigeria">Nigeria</option>
                       <option value="Africa">Africa</option>
                   </select>
                    </div>
                    <div class="lev-cn">
                        <label for="level">Select Level</label>
                        <select name="" id="" class="level">
                       <option value="Easy">Easy</option>
                       <option value="Medium">Medium</option>
                       <option value="Hard">Hard</option>
                   </select>
                    </div>
                    <button class="playBtn">Play</button>
                </div>

                <div class="re-arrange">Re-arrage the map by your left to look like the one below</div>

                <div class="real-image"></div>
                <div class="moves">
                    Number of Moves : <span class="counter">0</span>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script>
        function randomize(selector) {
            var $elems = selector ? $(this).find(selector) : $(this).children(),
                $parents = $elems.parent();
            $elems = selector.children();
            $parents = $elems.parent();

            $parents.each(function() {
                $(this).children(selector).sort(function() {
                    return Math.round(Math.random()) - 0.5;
                }).remove().appendTo(this);
            });
            return this;
        };

    </script>
    <script>
        //var game_align = $(".game-align");
        //game_align.hide();
        game_align = $("<span></span>");
        game_align.css({
            "color": "#fff",
            "width": "60%",
            "margin": "0 auto"
        });
        //console.log(game_align.text());
        var div_overlay = $("<div class='map-overlay'><i class='fa fa-thumbs-up'></i>&nbsp;&nbsp;You did it in : </div>");

        function spawnCell(parent, gridSize, row, col) {
            let cell = document.createElement('div');
            let dim = (100 / gridSize);
            cell.style.width = cell.style.height = dim + '%';
            cell.className = 'tile';
            cell.setAttribute("data-value", (row * gridSize + col));

            // style it up for bg
            let cellWidth = parent.offsetWidth / gridSize;
            let cellHeight = parent.offsetHeight / gridSize;
            cell.style.backgroundPositionY = -(row * cellHeight) + 'px';
            cell.style.backgroundPositionX = -(col * cellWidth) + 'px';

            return cell;
        }
        var counter = 0;

        function enableSwapping(cell) {
            // make draggable
            $(cell).draggable({
                snap: '#droppable',
                snapMode: 'outer',
                revert: "invalid",
                helper: "clone"
            });

            // make droppable
            $(cell).droppable({
                drop: function(event, ui) {
                    counter++;
                    //console.log(counter);
                    $(".counter").text(counter);
                    $(".count_val").text(counter);
                    game_align.text(counter + " moves. Click play to play again");
                    //console.log(game_align.text());

                    var $dragElem = $(ui.draggable).clone().replaceAll(this);
                    $(this).replaceAll(ui.draggable);

                    currentList = $('.canvas > .tile').map(function(i, el) {
                        return $(el).attr('data-value');
                    });
                    if (isSorted(currentList)) {
                        //                    game_align.addClass("transform");
                        //                    game_align.show();
                        //window.setTimeout(function(){},1000);
                        $(".canvas").css({
                            "pointer-events": "none"
                        });

                        div_overlay.addClass("over-lay");
                        div_overlay.css({
                            "padding-top": "40%",
                            "color": "#fff",
                            "width": "100%",
                            "padding": "0 auto"
                        });
                        $(".canvas").css({
                            "position": "relative"
                        });
                        div_overlay.insertBefore($(".tile")[0]);
                        div_overlay.append(game_align);
                        game_align.show();

                    }
                    enableSwapping(this);
                    enableSwapping($dragElem);
                }
            });
        }

        function isSorted(arr) {
            //console.log(arr);
            for (var i = 0; i < arr.length - 1; i++) {
                if (arr[i] != i)
                    return false;
            }
            return true;
        }

        function touchHandler(event) {
            var touch = event.changedTouches[0];

            var simulatedEvent = document.createEvent("MouseEvent");
            simulatedEvent.initMouseEvent({
                    touchstart: "mousedown",
                    touchmove: "mousemove",
                    touchend: "mouseup"
                }[event.type], true, true, window, 1,
                touch.screenX, touch.screenY,
                touch.clientX, touch.clientY, false,
                false, false, false, 0, null);

            touch.target.dispatchEvent(simulatedEvent);
            //event.preventDefault();
        }

        function start() {
            document.addEventListener("touchstart", touchHandler, true);
            document.addEventListener("touchmove", touchHandler, true);
            document.addEventListener("touchend", touchHandler, true);
            document.addEventListener("touchcancel", touchHandler, true);
        }



        function init(gridSize = 4) {
            gridSize = gridSize > 20 ? 20 : gridSize;
            let canvas = document.querySelector('.canvas');
            for (let row = 0; row < gridSize; row++) {
                for (let col = 0; col < gridSize; col++) {
                    let cell = spawnCell(canvas, gridSize, row, col);
                    canvas.appendChild(cell);
                }
            }
            randomize($('.canvas'));
            newList = $('.canvas > .tile').map(function(i, el) {
                return $(el).attr('data-value');
            });

            while (isSorted(newList)) {
                randomize($('.canvas'));
                newList = $('.canvas > .tile').map(function(i, el) {
                    return $(el).attr('data-value');
                });
            }
            start();
            enableSwapping($('.tile'));
            counter = 0;
        }
        init(2);

        window.addEventListener("resize", function() {
            console.log("resized");
        });

        var tile_el = $(".tile"),
            canvas = $(".canvas");

        var map_type_val = $(".map-type").val(),
            level_val = $(".level").val();

        var playBtn = $(".playBtn");

        var children = $(".map-type").find("option");

        var option1 = "<option value='Africa'>Africa</option><option value='Nigeria'>Nigeria</option>";
        //console.log(option1);

        var option2 = "<option value='Nigeria'>Nigeria</option><option value='Africa'>Africa</option>";
        //console.log(option2);

        $(".map-type").on("change", () => {
            map_type_val = $(".map-type :selected").val();
            //alert(map_type_val);
        });
        $(".level").on("change", () => {
            level_val = $(".level :selected").val();
            //alert(level_val);
        });

        playBtn.on("click", () => {
            $(".canvas").css({
                "pointer-events": "all"
            });
            //game_align.hide();
            if (map_type_val == "Africa") {
                //alert("Africa and " + level_val);
                canvas.html("");
                if (level_val == "Easy") {
                    init(2);
                    //$(".canvas").randomize();
                } else if (level_val == "Medium") {
                    init(4);
                    //$(".canvas").randomize();
                } else if (level_val == "Hard") {
                    init(8);
                    //$(".canvas").randomize();
                }

                let new_tile = $(".tile");
                new_tile.css({
                    "background-image": "url(assets/img/images/Africa_2copyy2222222copy.png)",
                    "background-size": "400px 400px",
                    "background-repeat": "no-repeat"
                });

                let real_image = $(".real-image-cn .real-image");
                real_image.css({
                    "background-image": "url(assets/img/images/Africa_2copyy2222222copy.png)",
                    "background-size": "300px 300px",
                    "background-repeat": "no-repeat"
                });

                //                $('.canvas').randomize();
                $(".map-type").html(option1);

            } else if (map_type_val = "Nigeria") {
                //alert("Nigeria and " + level_val);
                canvas.html("");
                if (level_val == "Easy") {
                    init(2);
                    //$(".canvas").randomize();
                } else if (level_val == "Medium") {
                    init(4);
                    //$(".canvas").randomize();
                } else if (level_val == "Hard") {
                    init(8);
                    //$(".canvas").randomize();
                }

                let new_tile = $(".tile");
                new_tile.css({
                    "background-image": "url(assets/img/images/naija_map.png)",
                    "background-size": "400px 400px",
                    "background-repeat": "no-repeat"
                });

                let real_image = $(".real-image-cn .real-image");
                real_image.css({
                    "background-image": "url(assets/img/images/naija_map.png)",
                    "background-size": "300px 300px",
                    "background-repeat": "no-repeat"
                });

                //                $('.canvas').randomize();
                $(".map-type").html(option2);
            }
        });

    </script>
    <?php
    require_once "assets/includes/footer.php";

    ?>
