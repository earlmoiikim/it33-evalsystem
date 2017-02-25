css codes

//button >>

.backbutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.backbutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -20px;
  transition: 0.5s;
}

.backbutton:hover span {
  padding-left: 25px;
}

.backbutton:hover span:after {
  opacity: 1;
  left: 0;
}
