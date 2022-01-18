<!DOCTYPE html>
<html>

<link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap"
      rel="stylesheet"
    />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"/>

<?php
$id = uniqid();
$role =array("Doctor","Engineer","Lawyer","Useless Person","Memer","Influencer","Bad Person","Good Person 💖");
$role=$role[rand(0,count($role)-1)];
echo '<title>Here is your Avtar Image - You are a '.$role.'</title>
<meta property="og:title" content="Here is your Avtar Image - You are a '.$role.'" />
<meta property="og:description" content="Here is your Avtar Image..." />
<meta property="og:image" content="https://avatars.dicebear.com/api/adventurer/'.$id.'.png"/>';

?>
<style>
:root {
  --background-color: #000000;
  --color: #000000;
  --light-theme: #ffffff;
}

body {
  font-family: "Mulish", sans-serif;
  background-color: var(--background-color);
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
a{
text-decoration:none;
}
.btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 220px;
  height: 60px;
  background-color: var(--light-theme);
  cursor: pointer;
  font-size: 24px;
  color: var(--color);
  transition: all 0.3s;
  position: relative;
  text-align: center;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 0 6px 30px -10px #cccccc;
}
.btn:hover {
  transform: translateX(5px) translateY(-7px);
}

.shop-now {
  position: relative;
}
.shop-now .santa-icon {
  position: absolute;
  width: 30px;
  height: 30px;
  top: -17px;
  right: -20px;
  transform: rotate(14deg);
}
.shop-now .santa-icon img {
  width: 100%;
  height: 100%;
}

.snowflake-grid {
  display: inline-grid;
  grid-template-columns: 1fr 1fr;
  grid-auto-rows: 50px;
  gap: 5px;
  width: 100px;
  transform: scale(0.4);
}
.snowflake-grid div {
  border-radius: 5px;
}
.snowflake-grid .snowflake-item {
  position: relative;
}

.to-left {
  position: absolute;
  top: -4px;
  left: -35px;
  animation: swing 3s infinite;
}
.to-left div {
  animation: flash 3s infinite;
}

.to-right {
  position: absolute;
  top: -25px;
  right: -35px;
  animation: swing 2.5s infinite;
}
.to-right div {
  animation: flash 2.5s infinite;
}

.border-left {
  border-left: 4px solid #e6dada;
}

.border-right {
  border-right: 4px solid #e6dada;
}

.border-bottom {
  border-bottom: 4px solid #e6dada;
}

.border-top {
  border-top: 4px solid #e6dada;
}

.sub-items {
  height: 28px;
  width: 28px;
}

.m-w-15 {
  width: 15px;
}

.m-h-15 {
  height: 15px;
}

.r-270 {
  transform: rotate(270deg);
}

.r-180 {
  transform: rotate(180deg);
}

.r-90 {
  transform: rotate(90deg);
}

.pull-down {
  position: absolute;
  bottom: 5px;
  right: 5px;
}

.pull-down-right {
  position: absolute;
  bottom: 5px;
  left: 5px;
}

.pull-right {
  position: absolute;
  right: 5px;
  top: 5px;
}

.pull-left {
  position: absolute;
  left: 5px;
  top: 5px;
}

.m-3 {
  margin: 3px;
}

@keyframes swing {
  50% {
    transform: rotateZ(10deg) scale(0.4);
  }
}
@keyframes flash {
  50% {
    border-color: #485563;
  }
}
</style>
<body>


<div class="container">
<img src="https://avatars.dicebear.com/api/adventurer/<?php echo $id;?>.png"/>';
<br>
   <div class="btn">
      <a href="https://bit.ly/insta-shr
"><div class="shop-now">Follow Me</div></a>
      <div class="snowflake-grid to-left">
         <div class="snowflake-item border-bottom border-right">
            <div class="sub-items border-right border-bottom pull-down">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-bottom border-left">
            <div
               class="sub-items border-right border-bottom r-90 pull-down-right"
               >
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-top border-right">
            <div class="sub-items border-right border-bottom r-270 pull-right">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-top border-left">
            <div class="sub-items border-right border-bottom r-180 pull-left">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
      </div>
      <div class="snowflake-grid to-right">
         <div class="snowflake-item border-bottom border-right">
            <div class="sub-items border-right border-bottom pull-down">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-bottom border-left">
            <div
               class="sub-items border-right border-bottom r-90 pull-down-right"
               >
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-top border-right">
            <div class="sub-items border-right border-bottom r-270 pull-right">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
         <div class="snowflake-item border-top border-left">
            <div class="sub-items border-right border-bottom r-180 pull-left">
               <div class="m-w-15 m-h-15 border-right border-bottom m-3"></div>
            </div>
         </div>
      </div>
   </div>
</div>
    


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61e6a4b2c2353fc6"></script>


</body>
</html>
