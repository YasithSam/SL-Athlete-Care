    <div class="accordion">
        <div class="image-box">
        <img src="../../public/assets/img/a.png">
        </div>
        <div class="accordion-text">
            <div class="title">FAQ</div>
        <ul class="faq-text">
            <li>
                <div class="question-arrow">
                    <span class="question">What is SL Athlete Care?</span>
                    
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic pariatur architecto nihil dolore animi suscipit!</p>
                <span class="line"></span>
            </li>
            <li>
                <div class="question-arrow">
                    <span class="question">What is SL Athlete Care?</span>

                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, animi ratione a voluptatibus deleniti repellendus.</p>
                <span class="line"></span>
            </li>
            <li>
                <div class="question-arrow">
                    <span class="question">What is SL Athlete Care?</span>

                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic dolores rem quod ad, ratione quibusdam!</p>
                <span class="line"></span>
            </li>
            <li>
                <div class="question-arrow">
                    <span class="question">What is SL Athlete Care?</span>

                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, est. Reprehenderit alias illo aliquid corrupti!</p>
                <span class="line"></span>
            </li>
            <li>
                <div class="question-arrow">
                    <span class="question">What is SL Athlete Care?</span>

                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque nihil dignissimos nam quo. Dolor, provident?</p>
                <span class="line"></span>
            </li>
        </ul>
    </div>
    </div>
    <br><br>

    <script>
        let li = document.querySelectorAll(".faq-text li");
        for (var i = 0; i < li.length; i++) {
            li[i].addEventListener("click", (e)=>{
                let clickedLi;
                if(e.target.classList.contains("question-arrow")){
                    clickedLi = e.target.parentElement;
                }else{
                    clickedLi = e.target.parentElement.parentElement;
                }
                clickedLi.classList.toggle("showAnswer");
                
            });
        }
    </script>
