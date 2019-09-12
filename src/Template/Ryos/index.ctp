<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'RYOS','index','Ryos'],
    ];
?>
<style>
/* @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro"); */
@-webkit-keyframes fade-in {
  from {
    visibility: hidden;
    opacity: 0;
  }
  to {
    visibility: visible;
    opacity: 1;
  }
}
@keyframes fade-in {
  from {
    visibility: hidden;
    opacity: 0;
  }
  to {
    visibility: visible;
    opacity: 1;
  }
}
@-webkit-keyframes slide-show {
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@keyframes slide-show {
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

/* h1 {
  color: #fff;
  font-size: 55px;
} */

p {
  line-height: 1.5;
}

/* nav {
  margin-top: 50px;
} */

.button {
  padding: 15px 20px;
  border: 2px solid white;
  border-radius: 5px;
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  color: white;
}
.button:hover, .button.is-active {
  color: #be93c5;
  background-color: white;
}

.top-left {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  max-width: 350px;
  margin: 20px;
  margin-top: 80px;
  top: 0;
  left: 0;
  -webkit-transform: translateX(-420px);
          transform: translateX(-420px);
}
@-webkit-keyframes slide-in-left {
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes slide-in-left {
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
.top-left.do-show {
  animation: slide-in-left 1s ease-in-out forwards, slide-in-left 1s ease-in-out reverse forwards 5s;
}
.top-left[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.top-left[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-left[data-notification-status="warning"] {
  background-color: #ffca28;
}
.top-left[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-left[data-notification-status="error"] {
  background-color: #ef5350;
}
.top-left[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-left[data-notification-status="success"] {
  background-color: #66bb6a;
}
.top-left[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-left[data-notification-status="question"] {
  background-color: #8d6e63;
}
.top-left[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-left[data-notification-status="plain"] {
  background-color: #333;
}

.top-right {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  visibility: hidden;
  opacity: 0;
  max-width: 350px;
  margin: 20px;
  margin-top: 70px;
  top: 0;
  right: 0;
}
.top-right.do-show {
  animation: fade-in 1s ease-in-out forwards, fade-in 1s ease-in-out reverse forwards 3s;
}
.top-right[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.top-right[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-right[data-notification-status="warning"] {
  background-color: #ffca28;
}
.top-right[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-right[data-notification-status="error"] {
  background-color: #ef5350;
}
.top-right[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-right[data-notification-status="success"] {
  background-color: #66bb6a;
}
.top-right[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-right[data-notification-status="question"] {
  background-color: #8d6e63;
}
.top-right[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.top-right[data-notification-status="plain"] {
  background-color: #333;
}

.bottom-right {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  max-width: 350px;
  margin: 20px;
  margin-bottom: 500px !important;
  bottom: 0;
  right: 0;
  -webkit-transform: translateX(420px);
          transform: translateX(420px);
}
@-webkit-keyframes slide-in-right {
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes slide-in-right {
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
.bottom-right.do-show {
  animation: slide-in-right 1s ease-in-out forwards, slide-in-right 1s ease-in-out reverse forwards 3s;
}
.bottom-right[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.bottom-right[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-right[data-notification-status="warning"] {
  background-color: #ffca28;
}
/* .bottom-right[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
} */
.bottom-right[data-notification-status="error"] {
  background-color: #ef5350;
}
/* .bottom-right[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
} */
.bottom-right[data-notification-status="success"] {
  background-color: #66bb6a;
}
/* .bottom-right[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
} */
.bottom-right[data-notification-status="question"] {
  background-color: #8d6e63;
}
/* .bottom-right[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
} */
.bottom-right[data-notification-status="plain"] {
  background-color: #333;
}

.bottom-left {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  visibility: hidden;
  opacity: 0;
  max-width: 350px;
  margin: 20px;
  margin-bottom: 80px;
  bottom: 0;
  left: 0;
}
.bottom-left.do-show {
  animation: fade-in 1s ease-in-out forwards, fade-in 1s ease-in-out reverse forwards 3s;
}
.bottom-left[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.bottom-left[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-left[data-notification-status="warning"] {
  background-color: #ffca28;
}
.bottom-left[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-left[data-notification-status="error"] {
  background-color: #ef5350;
}
.bottom-left[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-left[data-notification-status="success"] {
  background-color: #66bb6a;
}
.bottom-left[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-left[data-notification-status="question"] {
  background-color: #8d6e63;
}
.bottom-left[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bottom-left[data-notification-status="plain"] {
  background-color: #333;
}

.bar-top {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  top: 0;
  right: 0;
  left: 0;
  width: 100%;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.bar-top.do-show {
  animation: slide-show 1s forwards, slide-show 1s reverse forwards 3s;
}
.bar-top[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.bar-top[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-top[data-notification-status="warning"] {
  background-color: #ffca28;
}
.bar-top[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-top[data-notification-status="error"] {
  background-color: #ef5350;
}
.bar-top[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-top[data-notification-status="success"] {
  background-color: #66bb6a;
}
.bar-top[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-top[data-notification-status="question"] {
  background-color: #8d6e63;
}
.bar-top[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-top[data-notification-status="plain"] {
  background-color: #333;
}

/* .bar-bottom {
  position: fixed;
  z-index: 1000;
  display: flex;
  align-items: center;
  padding: 20px;
  color: #fff;
  line-height: 1.3;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.35);
  visibility: hidden;
  opacity: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
}
.bar-bottom.do-show {
  animation: fade-in 1s ease-in-out forwards, fade-in 1s ease-in-out reverse forwards 3s;
}
.bar-bottom[data-notification-status="notice"] {
  background-color: #29b6f6;
}
.bar-bottom[data-notification-status="notice"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23077CB2'/%3E%3Cpath d='M11.016,6.984V9h1.968V6.984H11.016z M11.016,17.016h1.968v-6h-1.968V17.016z' fill='%23077CB2'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-bottom[data-notification-status="warning"] {
  background-color: #ffca28;
}
.bar-bottom[data-notification-status="warning"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C19100'/%3E%3Cpath d='M11.016,17.016h1.968V15h-1.968V17.016z M11.016,6.983v6.001h1.968V6.983H11.016z' fill='%23C19100'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-bottom[data-notification-status="error"] {
  background-color: #ef5350;
}
.bar-bottom[data-notification-status="error"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23C71612'/%3E%3Cpath d='M13.406,12l2.578,2.578l-1.406,1.406L12,13.406l-2.578,2.578l-1.406-1.406L10.594,12L8.016,9.421l1.406-1.405L12,10.593 l2.578-2.577l1.406,1.405L13.406,12z' fill='%23C71612'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-bottom[data-notification-status="success"] {
  background-color: #66bb6a;
}
.bar-bottom[data-notification-status="success"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%233A813D'/%3E%3Cpath d='M10.477,13.136l5.085-5.085l1.406,1.406l-6.492,6.492l-3.446-3.445l1.406-1.406L10.477,13.136z' fill='%233A813D'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-bottom[data-notification-status="question"] {
  background-color: #8d6e63;
}
.bar-bottom[data-notification-status="question"]:before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  min-width: 30px;
  margin-right: 20px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M12 3.984c4.407 0 8.016 3.609 8.016 8.016 0 4.406-3.608 8.016-8.016 8.016S3.984 16.407 3.984 12 7.593 3.984 12 3.984m0-2C6.478 1.984 1.984 6.477 1.984 12c0 5.521 4.493 10.016 10.016 10.016S22.016 17.522 22.016 12c0-5.523-4.495-10.016-10.016-10.016zm0 2c4.407 0 8.016 3.609 8.016' fill='%23513F39'/%3E%3Cpath d='M12.001,6.314h-0.002c-1.996,0-3.609,1.614-3.609,3.609h1.784c0-0.977,0.85-1.784,1.826-1.784  c0.977,0,1.827,0.807,1.827,1.784c0,1.826-2.718,1.614-2.718,4.544h1.784c0-2.038,2.717-2.294,2.717-4.544  C15.609,7.928,13.997,6.314,12.001,6.314z M11.109,17.186h1.784v-1.826h-1.784V17.186z' fill='%23513F39'/%3E%3C/svg%3E"), center/cover no-repeat;
}
.bar-bottom[data-notification-status="plain"] {
  background-color: #333;
} */

.input-icons i {
    position: absolute;
  }

  .input-icons {
    width: 100%;
    margin-bottom: 10px;
  }

  .icon {
    padding: 10px;
    color: green;
    min-width: 50px;
    text-align: center;
  }

  .input-field {
    width: 100%;
    padding: 10px;
    text-align: center;
  }

  h2 {
    color: green;
  }
  .bubble
{
position: relative;
width: 250px;
height: 120px;
padding: 10px;
background: #fff;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
border: #EC5151 solid 3px;
}

.bubble:after
{
content: '';
position: absolute;
border-style: solid;
border-width: 0 10px 15px;
border-color: #FFFACD transparent;
display: block;
width: 0;
z-index: 10;
margin-left: -10px;
top: -15px;
left: 25%;
}

.bubble:before
{
content: '';
position: absolute;
border-style: solid;
border-width: 0 12px 17px;
border-color: #FF0000 transparent;
display: block;
width: 0;
z-index: 0;
margin-left: -12px;
top: -20px;
left: 25%;
}
</style>
<div class="section portal-projects">
  <div class="breadcrumb-container">
    <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
        <?php echo $this->Html->link(
          $item[0],
          ['controller'=>$item[2], 'action'=>$item[1]],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
      <?php endforeach; ?>
    </div>
  <div class="section home">
    <div class="home-menu">
      <div class="container-contact100">
        <div class="fixed-action-btn">
          <a class="btn-floating btn-large Scroll-button" style="margin-right:5%; margin-bottom:10%" id="next"><i class="material-icons">arrow_upward</i></a>
          <a class="return btn-floating btn-large Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return"><i class="material-icons">arrow_downward</i></a>
        </div>
      <div class="notify bar-top" id="div-notify" data-notification-status="success"><i id="icon-notify" class="material-icons mr-2">cancel</i> Por favor revisar, campos vacíos.</div>
        <main style="display:none">
          <div class="wrapper">
            <nav>
                <!-- <a href="#" class="button" data-type="top-left" data-status="success">Top Left</a>
                <a href="#" class="button" data-type="top-right" data-status="warning">Top Right</a> -->
                <a href="#" class="button" id="btn-error" data-type="bottom-right" data-status="error">Bottom Right</a>
                <a href="#" class="button" id="btn-error2" data-type="bottom-right" data-status="success">Bottom Right</a>
                <!-- <a href="#" class="button" id="btn-error-2" data-type="bottom-left" data-status="error">Bottom Left</a> -->
                <!-- <a href="#" class="button" id="btn-error-2" data-type="bottom-left" data-status="notice">Bottom Left</a> -->
                <!-- <a href="#" class="button" data-type="bar-top" data-status="plain">Top bar</a>
                <a href="#" class="button" data-type="bar-bottom" data-status="plain">Bottom bar</a> -->
              </nav>
            </div>
          </main>
    <div class="wrap-contact100">
      <form class="contact100-form validate-form active" id="Form-1" style="padding-bottom: 0 !important">
        <span class="contact100-form-title">
          IDENTIFICACIÓN DE REQUERIMIENTOS Y OPORTUNIDADES (RYOS)
        </span>
        <span class="contact100-form-sub-title">
          ENTRADA
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input entrada" id="div-name">
          <span class="label-input100">Nombre Requerimiento u Oportunidad - RYOS</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB." onclick="return false;">help_outline</i></span>
          <input class="input100 entrada" id="ryos-name" autocomplete="off" type="text" name="nombre" onkeyup="validarTexto(this);" placeholder="Ingrese el nombre del requerimiento u oportunidad">
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input entrada" id="div-gestor">
          <span class="label-input100">Gestor RYOS</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Responsable de RYOS" onclick="return false;">help_outline</i></span>
          <input class="input100 entrada" id="ryos-gestor" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="gestor" placeholder="Ingrese el gestor">
        </div>
        <div class="wrap-input100 rs1-wrap-input100">
          <span class="label-input100">Grupo Estratégico de Negocio (GEN)</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="GEN a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
          <select id="select-grupo-est" name="select-entrada" >
            <option class="work-option">Distribución</option>
            <option class="work-option">Transmisión y transporte</option>
            <option class="work-option">Generación</option>
            <option class="work-option">Corporativo</option>
         </select>
       </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">País</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="País donde se llevaría a cabo el proyecto" onclick="return false;">help_outline</i></span>
        <select id="select-country" name="select-entrada" onchange="Dynamic_Country();">
           <option class="work-country" value="CO">Colombia</option>
           <option class="work-country" value="PE">Perú</option>
           <option class="work-country" value="GT">Guatemala</option>
           <option class="work-country" value="other">Otro</option>
        </select>
      </div>
    <div class="wrap-input100 rs1-wrap-input100 validate-input">
      <span class="label-input100">Filial</span>
      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Filial que pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <div id="select-filial-col">
          <select name="select-entrada">
            <option class="option-col">GEB</option>
            <option class="option-col">SUCURSAL</option>
            <option class="option-col">TGI</option>
          </select>
        </div>
      <div id="select-filial-pe">
        <select name="select-entrada">
          <option class="option-pe">CONTUGAS</option>
          <option class="option-pe">CÁLIDDA</option>
          <option class="option-pe">CÁLIDDA ENERGÍA</option>
        </select>
      </div>
      <div id="select-filial-gt">
        <select name="select-entrada">
          <option class="option-gt">EEBIS</option>
          <option class="option-gt">TRECSA</option>
        </select>
      </div>
      <div id="input_other_filial">
        <input class="input100" id="ryos-cual" onkeyup="validarTexto(this);" autocomplete="off" type="text" placeholder="¿Cuál?">
      </div>
    </div>
    <div class="wrap-input100 rs1-wrap-input100 validate-input entrada" id="div-vice">
        <span class="label-input100">Vicepresidencia / Dirección</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Vicepresidencia o dirección a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <input class="input100 entrada" id="ryos-vice" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="email" placeholder="Ingrese la Vicepresidencia / dirección">
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input entrada" id="div-ger">
        <span class="label-input100">Gerencia</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Gerencia a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <input class="input100 entrada" id="ryos-ger" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="email" placeholder="Ingrese la gerencia">
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">¿Proyecto de origen Mandatorio?</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Indicar el listado desplegable si el RYOS es o no de origen mandatorio" onclick="return false;">help_outline</i></span>
        <select id="select-origen" name="select-entrada">
          <option class="option-origen">SI</option>
          <option class="option-origen">NO</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Tipo de proyecto</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccionar el tipo de proyecto" onclick="return false;">help_outline</i></span>
        <select id="select-tipo-proyecto" name="select-entrada">
           <option class="tp-option">Crecimiento</option>
           <option class="tp-option">Sostenimiento</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">Subcategoria</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccionar la subcategoría" onclick="return false;">help_outline</i></span>
        <div id="div-select-subcategoria-crec" name="select-entrada">
          <select class="select-subcategoria" id="select-subcategoria-crec" name="select-entrada">
             <option class="option-subc-crec" value="CREC">Convocatorias</option>
             <option class="option-subc-crec" value="CREC">Crecimiento orgánico</option>
          </select>
        </div>
        <div id="div-select-subcategoria-sost" style="display:none">
          <select class="select-subcategoria active" id="select-subcategoria-sost" name="select-entrada" disabled>
             <option class="option-subc-sost" value="CO">Continuidad operacional</option>
             <option class="option-subc-sost" value="TI">Tecnología de Información</option>
             <option class="option-subc-sost" value="AC">Administrativos corporativos</option>
          </select>
        </div>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <span class="label-input100">Fechas tentativas (DD/MM/AAAA)</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Fechas tentativas" onclick="return false;">help_outline</i></span>
        <table class="display highlight centered" id="id-table-dates">
        <thead>
          <tr>
              <th></th>
              <th>Inicio</th>
              <th>Fin</th>
          </tr>
        </thead>
        <tbody>
          <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
            <td>Fase I</td>
            <td><input class="input100 entrada table-date datepicker" readonly type="text" style="text-align:center"></td>
            <td><input class="input100 entrada table-date datepicker2" readonly type="text" style="text-align:center"></td>
          </tr>
          <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
            <td>Fase II</td>
            <td><input class="input100 entrada table-date datepicker3" readonly type="text" style="text-align:center"></td>
            <td><input class="input100 entrada table-date datepicker4" readonly type="text" style="text-align:center"></td>
          </tr>
          <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
            <td>Fase III</td>
            <td><input class="input100 entrada table-date datepicker5" readonly type="text" style="text-align:center"></td>
            <td><input class="input100 entrada table-date datepicker6" readonly type="text" style="text-align:center"></td>
          </tr>
          <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
            <td>Fase IV</td>
            <td><input class="input100 entrada table-date datepicker7" readonly type="text" style="text-align:center"></td>
            <td><input class="input100 entrada table-date datepicker8" readonly type="text" style="text-align:center"></td>
          </tr>
          <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
            <td>Fase V</td>
            <td><input class="input100 entrada table-date datepicker9" readonly type="text" style="text-align:center"></td>
            <td><input class="input100 entrada table-date datepicker10" readonly type="text" style="text-align:center"></td>
          </tr>
        </tbody>
      </table>
      </div>

      <!-- <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" type="button" id="Main-Btn">
          <span>
            Enviar
            <i class="material-icons right" aria-hidden="true">send</i>
          </span>
        </button>
      </div> -->
    </form>
      <form class="contact100-form validate-form" id="Form-2" style="padding-bottom: 0 !important">
        <span class="contact100-form-title" id="form-title"></span>
        <span class="contact100-form-sub-title">
          INFORMACIÓN GENERAL
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-necesidad">
          <span class="label-input100">Necesidad a resolver</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Necesidad a resolver" onclick="return false;">help_outline</i></span>
          <textarea id="ryos-necesidad" onkeyup="validarTexto(this);" class="materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just">
          <span class="label-input100">Justificación del valor</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación del valor" onclick="return false;">help_outline</i></span>
          <textarea id="ryos-just" onkeyup="validarTexto(this);" class="input200 materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-alcance">
          <span class="label-input100">Alcance</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Alcance" onclick="return false;">help_outline</i></span>
          <textarea id="ryos-alcance" onkeyup="validarTexto(this);" class="input200 materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-rest">
          <span class="label-input100">Restricciones y exclusiones</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Restricciones y exclusiones" onclick="return false;">help_outline</i></span>
          <textarea id="ryos-rest" onkeyup="validarTexto(this);" class="input200 materialize-textarea"></textarea>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input"id="div-sup">
          <span class="label-input100">Supuestos</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Supuestos" onclick="return false;">help_outline</i></span>
          <textarea id="ryos-sup" onkeyup="validarTexto(this);" class="input200 materialize-textarea"></textarea>
        </div>
      </form>
      <form class="contact100-form validate-form" id="Form-3" style="padding-bottom: 0 !important">
            <span class="contact100-form-sub-title">
              ALINEAMIENTO ESTRATÉGICO
            </span>
            <?php for ($i=1; $i <= 3 ; $i++):?>
              <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Objetivo # <?=$i?></span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Objetivo # <?=$i?>" onclick="return false;">help_outline</i></span>
                <select id="select-obj-<?=$i?>">
                   <option class="obj-<?=$i?>-option">1. Dinamizar el crecimiento rentable</option>
                   <option class="obj-<?=$i?>-option">2. Maximizar la eficiencia financiera</option>
                   <option class="obj-<?=$i?>-option">3. Lograr alternativas de remuneración para la infraestructura Ballena-Barranca</option>
                   <option class="obj-<?=$i?>-option">4. Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria</option>
                   <option class="obj-<?=$i?>-option">5. Estructurar nuevos negocios y servicios para el crecimiento de la Empresa</option>
                   <option class="obj-<?=$i?>-option">6. Desarrollar proyectos de infraestructura asegurando el MMCV</option>
                   <option class="obj-<?=$i?>-option">7. Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura</option>
                   <option class="obj-<?=$i?>-option">8. Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo</option>
                   <option class="obj-<?=$i?>-option">9. Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos</option>
                   <option class="obj-<?=$i?>-option">10. Transformar la organización con tecnologías de información y procesos de innovación del negocio</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-app<?=$i?>">
                <span class="label-input100">Aplicación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Aplicación" onclick="return false;">help_outline</i></span>
                <input class="input100 form3" autocomplete="off" onkeyup="validarTexto(this);" id="input-<?=$i?>" type="text" name="" placeholder="Ingrese la aplicación">
              </div>
            <?php endfor;?>
            <span class="contact100-form-sub-title" id="gen-valor">
              Generación de Valor
            </span>
            <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-gen-valor">
                <option class="gen-valor-option">Maximización de dividendos de largo plazo para los accionistas</option>
                <option class="gen-valor-option">Continuidad estratégica y fortalecimiento operacional permanente</option>
                <option class="gen-valor-option">Profundización del crecimiento de cada activo</option>
                <option class="gen-valor-option">Ninguna</option>
              </select>
            </div>
            <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input" id="div-app22">
              <span class="label-input100">Aplicación</span>
              <input class="input100 ti" value="-" id="app22" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <!--TI-->
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" id="div-app333">
              <span class="label-input100">Aplicación</span>
              <input class="input100 ti-exclusive" value="-" id="app333" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" id="div-app33">
              <span class="label-input100">Aplicación</span>
              <input class="input100 ti-exclusive" id="app33" value="-" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" id="div-app4">
              <span class="label-input100">Aplicación</span>
              <input class="input100 ti-exclusive" value="-" id="app4" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-MEC">
              <span class="label-input100">¿Está en el MEC?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el MEC?" onclick="return false;">help_outline</i></span>
              <select id="select-mec">
                <option class="mec-option">SI</option>
                <option class="mec-option">NO</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-mec-info">
              <span class="label-input100" id="title-mec-info"></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="info-mec" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-peti" style="display:none">
              <span class="label-input100">¿Está en el PETI (Plan estratégico de TI)?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el PETI?" onclick="return false;">help_outline</i></span>
              <select id="select-peti">
                <option class="option-peti">SI</option>
                <option class="option-peti">NO</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just-peti" style="display:none">
              <span class="label-input100">Justificación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti-exclusive" value="-" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" id="input-just-peti" placeholder="Ingrese la justificación">
            </div>
            <span class="crec-flags contact100-form-sub-title">
              Alineamiento Estratégico (Fit Estratégico)
              <span class="icon-download"><i class="material-icons error-text" id="main_flag">flag</i></span>
            </span>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tema-dominante">
              <span class="label-input100">1. Tema Dominante</span>
              <span class="icon-download"><i class="material-icons error-text" id="first_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox"/>
                  <span>En la cadena energética de baja emisión</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Empresa top 1 o 2 en cada mercado o potencializa la entrada a nuevas regiones</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Enmarcada bajo las premisas clave de cada GEN (focos, regiones y destrezas)</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Perspectiva de rentabilidad de largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app5">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app5" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tesis-inversion">
              <span class="label-input100">2. Tesis de Inversión</span>
              <span class="icon-download"><i class="material-icons error-text" id="second_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Perspectiva de dividendos creciente</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Barreras de entrada vía altas inversiones de capital</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Mercados regulados</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Bajo niveles relativos de riesgo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app6">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app6" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox posicion-mercado">
              <span class="label-input100">3. Posición de Mercado</span>
              <span class="icon-download"><i class="material-icons error-text" id="third_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Exposición a buenas perspectivas demográficas de largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Institucionalidad regulatoria y jurídica confiable</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Geografías en expansión y desarrollo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app7">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app7" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox modelo-intervencion">
              <span class="label-input100">4. Modelo de Intervención</span>
              <span class="icon-download"><i class="material-icons error-text" id="fourth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Capacidad de intervenir proactivamente en la agenda de crecimiento</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Compartir estándares de sostenibilidad, inversión social y valor compartido</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Relacionamiento con comunidades y grupos de interés, generando valor compartido</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app8">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app8" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox capacidades">
              <span class="label-input100">5. Capacidades Técnicas, Financieras y de Gestión de Riesgos Clave</span>
              <span class="icon-download"><i class="material-icons error-text" id="fifth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Experiencia en regiones comparables</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Acceso a tecnología y mejores prácticas gerenciales</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Capacidad financiera alineada con la inversión y acceso a capital</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Acceso a mercados y reputación superior</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app9">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app9" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox gobierno-corporativo">
              <span class="label-input100">6. Gobierno Corporativo</span>
              <span class="icon-download"><i class="material-icons error-text" id="sixth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Socios: Acuerdos de accionistas alineados en intereses de largo plazo del Grupo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Aliados: Acuerdos de niveles de servicio, aspectos técnicos o de gestión de a través de relaciones contractuales a mediano y largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Estándares de transparencia y reputación del más alto nivel</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Identificación y manejo de conflictos de interés con otras compañías del grupo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Relación simétrica y colaborativa</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app10">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 ti" value="-" id="app10" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-socio-est">
              <span class="label-input100">Visualización de un socio estratégico</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Visualización de un socio estratégico" onclick="return false;">help_outline</i></span>
              <select id="select-socio-est">
                <option value="" disabled selected>Seleccione una opción</option>
                <option>SI</option>
                <option>NO</option>
              </select>
            </div>
            <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual2">
              <span class="label-input100">¿Cuál? (opcional)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál? (opcional)" onclick="return false;">help_outline</i></span>
              <input class="input100 form3" value="-" id="cual2" onkeyup="validarTexto(this);" value="-" autocomplete="off" type="text" name="" placeholder="">
            </div>
            <span class="socio-est contact100-form-sub-title" style="display:none">Porcentaje de un socio estratégico</span>
            <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="Div-valor">
              <span class="label-input100">Valor tentativo</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100 form3" autocomplete="off" type="number" value="0" id="valor-tentativo" onkeyup="validarNumero(this);" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px">
            </div>
          </form>
      <form class="contact100-form validate-form" id="Form-4" style="padding-bottom: 0 !important">
          <span class="contact100-form-sub-title">
            VIABILIDAD FINANCIERA
          </span>
          <!-- CRECIMIENTO -->
          <div class="crec-info-finaciera wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Estimativo de ingresos anuales</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Estimado de ingresos anuales" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered">
            <thead>
              <tr>
                  <th>Moneda</th>
                  <th>Tasa de cambio a USD</th>
                  <th>Ingreso anual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Millones COP</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera" id="input-anual-default-1" autocomplete="off" type="number" readonly onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="3013.11" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera anual-estimate" id="input-cop-anual" autocomplete="off" onkeydown="return event.keyCode !== 69"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones USD</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100" id="input-anual-default-2" readonly autocomplete="off" onkeydown="return event.keyCode !== 69" type="number" min="0.00" max="10000.00" step="0.01" value="1.00" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera anual-estimate" id="input-usd-anual" autocomplete="off" onkeydown="return event.keyCode !== 69"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones EUR</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera" id="input-anual-default-3" readonly autocomplete="off" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.85" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera anual-estimate" id="input-eur-anual" autocomplete="off"  type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones GTQ</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera" id="input-anual-default-4" readonly autocomplete="off" type="number" min="0.00" max="10000.00" step="0.01" value="7.18" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 financiera anual-estimate" id="input-gtq-anual" autocomplete="off"  type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Ingresos anuales</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Ingresos anuales" onclick="return false;">help_outline</i></span>
            <input class="input100 financiera" id="ingresos-anuales" autocomplete="off" type="number" readonly name="name" value="0" placeholder="Ingresos anuales">
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">EBITDA</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="EBITDA" onclick="return false;">help_outline</i></span>
            <input class="input100 financiera" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0" name="name" placeholder="EBITDA" autocomplete="off">
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Aporte a la MEGA</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan al RYOS que está registrando" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Baja - Aporte menor al 2% de la MEGA</option>
               <option class="work-option">Media - Aporte entre el 2% y el 5% de la MEGA</option>
               <option class="work-option">Alta - Aporte mayor al 5% de la MEGA</option>
            </select>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Estabilidad de ingresos</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan el RYOS que está registrando" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Baja - Ingresos por otros mecanismos</option>
               <option class="work-option">Media - Ingreso por vía modificación base de activos USO (Ampliaciones y compra activos USO)</option>
               <option class="work-option">Alta - Ingreso por vía de convocatorias o contratos en firme</option>
            </select>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Vía de ingresos</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan el RYOS que está registrando" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Ingreso por vía de convocatorias o contratos en firme</option>
               <option class="work-option">Ingreso por vía de demandas existentes en el mercado o mezcla de ingreso por contrato</option>
               <option class="work-option">Ingreso por posible demanda asociada al crecimiento del mercado</option>
            </select>
          </div>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Beneficios tangibles e intangibles</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione el beneficio junto a su respectiva descripción" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered">
            <thead>
              <tr>
                  <th>Tipo de beneficio</th>
                  <th>Descripción de beneficio</th>
                  <th>Situación actual (Cifra o descripción)</th>
                  <th>Situación con el beneficio (Cifra o descripción)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt1"><textarea class="input300 financiera materialize-textarea" id="txt1" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt2"><textarea class="input300 financiera materialize-textarea" id="txt2" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt3"><textarea class="input300 financiera materialize-textarea" id="txt3" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt4"><textarea class="input300 financiera materialize-textarea" id="txt4" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt5"><textarea class="input300 financiera materialize-textarea" id="txt5" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt6"><textarea class="input300 financiera materialize-textarea" id="txt6" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt7"><textarea class="input300 financiera materialize-textarea" id="txt7" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt8"><textarea class="input300 financiera materialize-textarea" id="txt8" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt9"><textarea class="input300 financiera materialize-textarea" id="txt9" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt10"><textarea class="input300 financiera materialize-textarea" id="txt10" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt11"><textarea class="input300 financiera materialize-textarea" id="txt11" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt12"><textarea class="input300 financiera materialize-textarea" id="txt12" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt13"><textarea class="input300 financiera materialize-textarea" id="txt13" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt14"><textarea class="input300 financiera materialize-textarea" id="txt14" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt15"><textarea class="input300 financiera materialize-textarea" id="txt15" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
              <tr>
                <td>
                  <select id="select-work">
                   <option class="work-option">Tangible</option>
                   <option class="work-option">Intangible</option>
                  </select>
                </td>
                <td id="parent-txt16"><textarea class="input300 financiera materialize-textarea" id="txt16" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt17"><textarea class="input300 financiera materialize-textarea" id="txt17" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
                <td id="parent-txt18"><textarea class="input300 financiera materialize-textarea" id="txt18" value="-" onkeyup="validarTexto(this);" style="margin-top: 6.5px"></textarea></td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <span class="label-input100">Estimado de costos de inversión</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Relacione el presupuesto requerido año a año, en la respectiva moneda" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered" id="table-inversion">
            <thead>
              <tr id="tr-head">
                  <th id="first_th">Moneda</th>
                  <th id="last_th"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="tr_1">Millones COP</td>
                <td>Millones COP</td>
              </tr>
              <tr>
                <td id="tr_2">Millones USD</td>
                <td>Millones USD</td>
              </tr>
              <tr>
                <td id="tr_3">Millones EUR</td>
                <td>Millones EUR</td>
              </tr>
              <tr>
                <td id="tr_4">Millones GTQ</td>
                <td>Millones GTQ</td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-pres-total">
            <span class="label-input100">Presupuesto total</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Presupuesto" onclick="return false;">help_outline</i></span>
            <input class="input100 financiera" id="Pres-total" autocomplete="off" type="text" name="name" value="0" readonly placeholder="Ingrese el presupuesto">
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" id="ciclo-div">
            <span class="label-input100">Ciclo de vida del producto (años)</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Ingrese el tiempo que operará el producto que se genera por la implementación de su RYOS" onclick="return false;">help_outline</i></span>
            <input class="input100 financiera" type="number" id="ciclo" autocomplete="off" onkeyup="validarNumero(this);" value="0" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px" placeholder="Ingrese el ciclo de vida">
          </div>
          <span class="origen-mandatorio contact100-form-sub-title">
            PROYECTOS DE ORIGEN MANDATORIO
          </span>
          <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input" id="costos-div">
            <span class="label-input100">Costos por no ejecución</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Estime e incluya el monto económico que estima GEB tendría que desembolsar por concepto de multas, penalidades y otros, en caso de no implementar esta RYOS" onclick="return false;">help_outline</i></span>
            <input class="input100 financiera" type="number" name="name" id="costos" placeholder="Ingrese los costos" value="0" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" autocomplete="off" onkeyup="validarNumero(this);" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px">
          </div>
          <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input" id="parent-txt19">
            <span class="label-input100">Consecuencia sin RYOS</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Relacione todas las consecuencias identificadas en las cuales incurriría GEB en caso de no ejecutar el RYOS" onclick="return false;">help_outline</i></span>
            <textarea class="input300 financiera materialize-textarea" id="cons-ryos" value="-" onkeyup="validarTexto(this);" placeholder="Ingrese la consecuencia" style="margin-top: 1px"></textarea>
          </div>
        </form>
      <form class="contact100-form validate-form" id="Form-5" style="padding-bottom: 0 !important">
              <span class="contact100-form-sub-title">
                ATRACTIVIDAD TÉCNICA
              </span>
              <!-- CO -->
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Criticidad en la operación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-crit-co">
                   <option class="crit-co-option">No afecta la continuidad operacional</option>
                   <option class="crit-co-option">Afectación menor a la continuidad operacional</option>
                   <option class="crit-co-option">Afectación mayor a la continuidad operacional</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Cambio tecnológico</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio de tecnología en el activo o sus componentes</option>
                   <option class="work-option">Uno o más componentes / activo cambia a conocida en GEB</option>
                   <option class="work-option">Uno o más componentes cambia a conocida en GEB</option>
                   <option class="work-option">Uno o más componentes cambia a desconocida en GEB</option>
                   <option class="work-option">Uno o más componentes / activo cambia a desconocida en GEB</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Disponibilidad de los activos</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en la disponibilidad en el activo o sus componentes</option>
                   <option class="work-option">Reduce frecuencia de paradas no programadas sin modificar tiempo de paradas programadas</option>
                   <option class="work-option">Reduce tiempo de paradas programadas pero no modifica frecuencia de paradas no programadas</option>
                   <option class="work-option">Reduce tiempo de paradas programadas y frecuencia de paradas no programadas</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Vida útil del activo</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en la vida útil del activo o sus componentes</option>
                   <option class="work-option">No aumenta la vida útil del activo pero si de sus componentes</option>
                   <option class="work-option">Aumenta la vida útil del activo y de sus componentes</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Esquema de mantenimiento</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en el esquema de mantenimiento del activo o sus componentes</option>
                   <option class="work-option">Reduce frecuencia de paradas programadas sin modificar tiempo de intervención</option>
                   <option class="work-option">Reduce tiempo de paradas programadas sin modificar su frecuencia</option>
                   <option class="work-option">La intervención permite reducir el tiempo de las paradas programadas y su frecuencia</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-sinergia-co">
                  <option class="sinergia-co-option">NO</option>
                   <option class="sinergia-co-option">SI</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-cual-co" style="display:none">
                <span class="label-input100">¿Cuál (es)?</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
                <input class="input100 form5" value="-" id="cual-co" onkeyup="validarTexto(this);" value="-" autocomplete="off" type="text" name="" placeholder="">
              </div>
              <!-- TI -->
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Tipo de proyecto de TI</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Soluciones tecnológicas</option>
                   <option class="work-option">Servicios de arquitectura e innovación en TI</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Criticidad en la operación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No afecta la continuidad operacional</option>
                   <option class="work-option">Afectación menor a la continuidad operacional</option>
                   <option class="work-option">Afectación mayor a la continuidad operacional</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">¿Se instalará tecnología?</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">SI</option>
                   <option class="work-option">NO</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Cuadrante de Gartner</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Retadores - Challengers</option>
                   <option class="work-option">Líderes - Leaders</option>
                   <option class="work-option">Jugadores de Nicho - Niche players</option>
                   <option class="work-option">Visionarios - Visionaries</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Estado de la tecnología</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                   <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                   <option class="work-option">Nueva en el mundo</option>
                </select>
              </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-sinergia-ti">
                <option class="sinergia-ti-option">NO</option>
                 <option class="sinergia-ti-option">SI</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual-ti">
              <span class="label-input100">¿Cuál (es)?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
              <input class="input100 form5" value="-" id="cual-ti" onkeyup="validarTexto(this);" value="-" autocomplete="off" type="text" name="" placeholder="">
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Complejidad del proyecto</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-complejidad-ti">
                 <option class="complejidad-ti-option">Alta</option>
                 <option class="complejidad-ti-option">Media</option>
                 <option class="complejidad-ti-option">Baja</option>
              </select>
              <span id="complejidad-ti-span">Duración ejecución proyecto mayor a 8 meses, participación de más de 3 áreas de la empresa y un equipo de proyecto mayor a 5 personas.</span>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto sobre la empresa</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                 <option class="work-option">Positivo. Genera el beneficio previsto</option>
                 <option class="work-option">Neutral. No genera ningún beneficio</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto sobre GEB</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                 <option class="work-option">Positivo. Genera el beneficio previsto</option>
                 <option class="work-option">Neutral. No genera ningún beneficio</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Resistencia al cambio</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-resistencia-ti">
                 <option class="resistencia-ti-option">Alta</option>
                 <option class="resistencia-ti-option">Media</option>
                 <option class="resistencia-ti-option">Baja</option>
              </select>
              <span id="span-resistencia-ti">No es un cambio necesario y en la compañía se ve como una carga adicional en las tareas.</span>
            </div>
            <!-- AC -->
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Restricciones regulatorias</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-restricciones-reg">
                 <option class="restricciones-reg-option" value="no">No se requieren trámites</option>
                 <option class="restricciones-reg-option" value="algunos">Se requieren algunos trámites</option>
                 <option class="restricciones-reg-option" value="si">Se requieren trámites</option>
              </select>
              <span id="span-restricciones-reg">Para implementarlo no se requieren trámites (p.e. Licencias o permisos) que pongan en riesgo la ejecución o la retrasen.</span>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Criticidad en la operación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">No afecta la continuidad operacional</option>
                 <option class="work-option">Afectación menor a la continuidad operacional</option>
                 <option class="work-option">Afectación mayor a la continuidad operacional</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Disponibilidad de los recursos</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-disponibilidad">
                 <option class="disponibilidad-option">Alta</option>
                 <option class="disponibilidad-option">Media</option>
                 <option class="disponibilidad-option">Baja</option>
              </select>
              <span id="disponibilidad-span">GEB cuenta con recursos competentes suficientes para implementarlo.</span>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-sinergia-ac">
                 <option class="work-option">NO</option>
                 <option class="work-option">SI</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual-ac">
              <span class="label-input100">¿Cuál (es)?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
              <input class="input100 form5" value="-" id="cual-ac" onkeyup="validarTexto(this);" value="-" autocomplete="off" type="text" name="" placeholder="">
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto en SST</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-impacto-sst">
                 <option class="impacto-sst-option">Alto</option>
                 <option class="impacto-sst-option">Medio</option>
                 <option class="impacto-sst-option">Bajo</option>
              </select>
              <span id="impacto-sst-info-span">Reduce la probabilidad de accidentes, incidentes y enfermedades laborales.</span>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con estrategias de gestión humana</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-sinergia">
                 <option class="sinergia-option">Alta</option>
                 <option class="sinergia-option">Media</option>
                 <option class="sinergia-option">Baja</option>
              </select>
              <span id="sinergia-span">Permite apalancar las estrategias de gestión humana y calidad de vida.</span>
            </div>
              <!-- CRECIMIENTO -->
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Interconexión (Mercados entre)</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione la interconexión" onclick="return false;">help_outline</i></span>
                <select id="select-interconexion">
                   <option class="interconexion-option" value="FE">Fuentes energéticas</option>
                   <option class="interconexion-option" value="FE-GU">Fuentes energéticas y grandes usuarios</option>
                   <option class="interconexion-option" value="FE-CP">Fuentes energéticas y ciudades pequeñas</option>
                </select>
                <span id="interconexion-span">Baja emisión y grandes usuarios industriales/comerciales o ciudades de más de 4 Millones de habitantes.</span><br />
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Tecnología a instalar</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija en el desplegable el nivel de conocimiento en el mundo y GEB de la tecnología vinculada con el RYOS en registro" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                   <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                   <option class="work-option">Nueva en el mundo</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Complejidad del proyecto</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando" onclick="return false;">help_outline</i></span>
                <select id="select-complejidad-crec">
                   <option class="complejidad-crec-option">Alta</option>
                   <option class="complejidad-crec-option">Media</option>
                   <option class="complejidad-crec-option">Baja</option>
                </select>
                <span id="complejidad-crec-span-1">- Más de tres activos para construir o línea de más de 100 km.</span><br/>
                <span id="complejidad-crec-span-2">- CAPEX mayor de MUSD 100.</span><br/>
                <span id="complejidad-crec-span-3">- Requiere expertos senior.</span><br/>
                <span id="complejidad-crec-span-4">- Gran esfuerzo de ingeniería.</span>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Gestión social</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando" onclick="return false;">help_outline</i></span>
                <select id="select-social">
                   <option class="social-option">Bajo</option>
                   <option class="social-option">Medio</option>
                   <option class="social-option">Alto</option>
                </select>
                <span id="social-span">Sin presencia de comunidades o grupos étnicos / zonas con antecedentes de negociaciones exitosas para proyectos lineales.</span>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Gestión ambiental</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando" onclick="return false;">help_outline</i></span>
                <select id="select-gestion-ambiental">
                   <option class="gestion-ambiental-option">Bajo</option>
                   <option class="gestion-ambiental-option">Medio</option>
                   <option class="gestion-ambiental-option">Alto</option>
                </select>
                <span id="gestion-ambiental-span">Cambio menor de licencia ambiental.</span>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Sinergia con otros proyectos o activos propios</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando" onclick="return false;">help_outline</i></span>
                <select id="select-sinergia-crec">
                   <option class="sinergia-crec-option">Alta</option>
                   <option class="sinergia-crec-option">Media</option>
                   <option class="sinergia-crec-option">Baja</option>
                </select>
                <span id="sinergia-crec-span">En sinergia con otras empresas, activos o proyectos del GEB o Proyectos futuros.</span>
              </div>
            </form>
      <form class="contact100-form validate-form" id="Form-6" style="padding-bottom: 0 !important">
                    <!-- CO -->
                    <span class="comp-co contact100-form-sub-title">
                      ASPECTOS COMPLEMENTARIOS
                    </span>
                    <span class="comp-co contact100-form-sub-title">
                      <small>AMBIENTAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>SOCIAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>SST</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>DE SEGURIDAD FÍSICA</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                         <option class="work-option" id="option-elect">SI</option>
                         <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>TIERRAS / PREDIAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>JURÍDICA Y REGULATORIA</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
           <div class="chart wrap-input100 rs1-wrap-input100" style="width: 100% !important">
             <span class="contact100-form-sub-title">
               NIVEL DE RIESGO
             </span>
               <div class="chart-risk">
                   <div class="heatmap">
                       <table>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-1" href="#detailBtnRisks1" draggable="true">R1</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" href="#detailBtnRisks2" id="btn-2" draggable="true">R2</a></span></th>
                               <th></th>
                               <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                               <th>MA</th>
                               <td class="yellow" style="width: 20%">
                               </td>
                               <td class="yellow" style="width: 20%">
                               </td>
                               <td class="orange" style="width: 20%">
                               </td>
                               <td class="red" style="width: 20%" style="width: 20%">
                               </td>
                               <td class="red" style="width: 20%">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-3" href="#detailBtnRisks3"  draggable="true">R3</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-4" href="#detailBtnRisks4" draggable="true">R4</a></span></th>
                               <th></th>
                               <th>A</th>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="red">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-5" href="#detailBtnRisks5" draggable="true">R5</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-6" href="#detailBtnRisks6" draggable="true">R6</a></span></th>
                               <th></th>
                               <th>M</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="orange">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-7" href="#detailBtnRisks7" draggable="true">R7</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-8" href="#detailBtnRisks8" draggable="true">R8</a></span></th>
                               <th></th>
                               <th>B</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-9" href="#detailBtnRisks9" draggable="true">R9</a></span></th>
                               <th></th>
                               <th></th>
                               <th>MB</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                           </tr>
                           <tr>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th class="title" colspan="2"></th>
                               <th>MB</th>
                               <th>B</th>
                               <th>M</th>
                               <th>A</th>
                               <th>MA</th>
                           </tr>
                           <tr>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th class="title" colspan="2"></th>
                               <th class="title" colspan="5">
                                   <h3>Impacto</h3>
                               </th>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
           <div class="container-contact100-form-btn">
             <button class="contact100-form-btn" type="button" id="Main-Btn">
               <span>
                 Enviar
                 <i class="material-icons right" aria-hidden="true">send</i>
               </span>
             </button>
           </div>
          </form>
         <!-- DIVS Estructurales -->
         <section class="container-triangule" style="margin:auto !important; margin-bottom: 50px !important;">
            <div class="sec1" id="triangule-sec1" style="border-color: transparent transparent #EC5151 transparent"></div>
            <div class="sec2" id="triangule-sec2" style="border-color: transparent transparent transparent #EC5151"></div>
            <div class="sec3" id="triangule-sec3" style="border-color: transparent transparent #EC5151 transparent;"></div>
            <div class="hollow"></div>

            <div class="title1 main-font error-text" id="title-sec2">ATRACTIVIDAD TÉCNICA</div>
            <div class="title2 main-font error-text" id="title-sec1">NIVEL DE RIESGO</div>
            <div class="title3 main-font error-text" id="title-sec3">VIABILIDAD FINANCIERA</div>

            <div class="inner-cont" id="triangule-text" style="color: #EC5151;">
                <div class="main-font">Alineación Estratégica</div>
                <!-- <img src="img/logo-geb.svg" width="160px" style='margin-top: 0.5em'> -->
                <?= $this->Html->image('logos/logo-geb.svg', ['width'=>'160px']) ?>
            </div>
        </section>
        </div>
       </div>
      </div>
     </div>
  </div>
<?php for ($i= 1; $i < 10; $i++):?>
  <div id="detailBtnRisks<?=$i?>" class="modal">
   <div class="modal-content">
     <a class="modal-close close">
       <i class="material-icons">close</i>
     </a>
     <h2>RIESGOS ESPECÍFICOS RELEVANTES IDENTIFICADOS POR EL GESTOR DEL RYOS</h2>
       <span class="label-input100">RIESGO</span>
       <div class="input100">
        <textarea id="textarea1" class="risks-input materialize-textarea"></textarea>
       </div>
      </div>
      <div class="modal-footer">
          <a class="modal-close waves-effect error btn btn-depressed">Cancelar</a>
          <a class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
     </div>
<?php endfor;?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
     var Calendar = document.querySelector('.datepicker');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker2');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker3');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker4');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker5');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker6');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker7');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker8');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker9');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker10');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
    </script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.button').on('click', function(event){
      var type = $(this).data('type');
      var status = $(this).data('status');
      $('.button').removeClass('is-active');
      $(this).addClass('is-active');
    $('.notify')
      .removeClass()
      .attr('data-notification-status', status)
      .addClass(type + ' notify')
      .addClass('do-show');
      // event.preventDefault();
    })
    $('#select-filial-pe').hide()
    $('#select-filial-pe *').attr("disabled", "disabled");
    $('#select-filial-gt').hide();
    $('#select-filial-gt *').attr("disabled", "disabled");
    $('#input_other_filial').hide();
    $('#input_other_filial *').attr("disabled", "disabled");
    $('#next').hide();
    $('#Form-2').hide();
    $('#Form-3').hide();
    $('#Form-4').hide();
    $('#Form-5').hide();
    $('#Form-6').hide();
    var Form_Numbers = null;
    $("#next").click(function(){
      Form_Numbers = $('.contact100-form.validate-form.active').index();
      BtnNextHide(Form_Numbers);
      if ($('.contact100-form.validate-form.active').index() > 0) {
        $('.contact100-form.validate-form').hide();
        $('.contact100-form.validate-form.active').removeClass("active").prev().addClass("active").show();
      }
      $('body,html').animate({
        scrollTop : 0
      }, 500);
    });
    $("#Main-Btn").click(function(){
      if ($('#Form-6').is(":visible")) {
        var empty_inputs = $('.risks-input.materialize-textarea').filter(function(){return !$(this).val()}).length;
          if (empty_inputs == 0) {
            $('#triangule-sec1').removeAttr('style');
            $('#title-sec1').removeClass('error-text');
          } else {
            $('#triangule-sec1').css("border-color", "transparent transparent #EC5151 transparent");
            $('#title-sec1').addClass('error-text');
          }
          if (empty_inputs == 0) {
            if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
              $('#btn-error2').click();
              $('#icon-notify').text("check_circle");
              var str = document.getElementById('div-notify').innerHTML;
              var res = str.replace("Por favor revisar, campos vacíos.", "El RYOS ha sido enviado correctamente.");
              document.getElementById("div-notify").innerHTML = res;
              setTimeout(function(){$('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')}, 4000);
            }
          } else {
            if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
              $('#btn-error').click();
              $('#icon-notify').text("cancel");
              var str = document.getElementById('div-notify').innerHTML;
              var res = str.replace("El RYOS ha sido enviado correctamente.", "Por favor revisar, campos vacíos.");
              document.getElementById("div-notify").innerHTML = res;
              setTimeout(function(){$('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')}, 4000);
            }
          }
        }
      });
      $("#return").click(function(){
        var array_form = {};
        $('.input100.entrada').each(function(){
          array_form[$(this).val()] = $(this).val();
        });
        $('select[name="select-entrada"]').each(function(){
          $(this).children(":selected").each(function(){
            array_form[$(this).html()] = $(this).html();
          });
        });
        if ($('#Form-1').is(":visible")) {
          var empty_inputs = $('.input100.entrada').filter(function(){return !$(this).val()}).length;
        }
        if ($('#Form-2').is(":visible")) {
          var empty_inputs = $('.input200').filter(function(){return !$(this).val()}).length;
        }
        if ($('#Form-3').is(":visible")) {
          var empty_inputs1 = $('.input100.ti').filter(function(){return !$(this).val()}).length;
          var empty_inputs2 = $('.input100.form3').filter(function(){return !$(this).val()}).length;
          var empty_inputs3 = $('.input100.ti-exclusive').filter(function(){return !$(this).val()}).length;
          var empty_inputs = empty_inputs1 + empty_inputs2 + empty_inputs3;
          console.log(empty_inputs1+" "+empty_inputs2+ " "+empty_inputs3);
          if (empty_inputs == 0) {
            $('#triangule-text').removeAttr('style');
          } else {
            $('#triangule-text').css("color", "#EC5151");
          }
        }
        if ($('#Form-4').is(":visible")) {
          var empty_inputs1 = $('.input100.financiera').filter(function(){return !$(this).val()}).length;
          var empty_inputs2 = $('.input300.financiera').filter(function(){return !$(this).val()}).length;
          var empty_inputs = empty_inputs1 + empty_inputs2;
          if (empty_inputs == 0) {
            $('#triangule-sec3').removeAttr('style');
            $('#title-sec3').removeClass('error-text');
          } else {
            $('#triangule-sec3').css("border-color", "transparent transparent #EC5151 transparent");
            $('#title-sec3').addClass('error-text');
          }
        }
        if ($('#Form-5').is(":visible")) {
          $('#triangule-sec2').removeAttr('style');
          $('#title-sec2').removeClass('error-text');
          empty_inputs = 0;
        }
        if ($('#Form-6').is(":visible")) {
          var empty_inputs = $('.risks-input.materialize-textarea').filter(function(){return !$(this).val()}).length;
          if (empty_inputs == 0) {
            $('#triangule-sec1').removeAttr('style');
            $('#title-sec1').removeClass('error-text');
          } else {
            $('#triangule-sec1').css("border-color", "transparent transparent #EC5151 transparent");
            $('#title-sec1').addClass('error-text');
          }
        }
        // console.log(empty_inputs1+" "+empty_inputs2);
        if (empty_inputs == 0) {
          Form_Numbers = $('.contact100-form.validate-form.active').index();
          BtnReturnHide(Form_Numbers);
        if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length-1) {
            $('.contact100-form.validate-form.active').hide();
            $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
        }
          $('#next').show();
          $('body,html').animate({
            scrollTop : 0
          }, 500);
        } else {
          if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
            $('#btn-error').click();
            setTimeout(function(){$('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')}, 4000);
          }
        }
      });
    function inputs_vacios(){
      $('.input100.entrada').filter(function(){return !$(this).val()}).after('<span class="bubble z-depth-2" style="font-size: small; color:red; margin-top: 10%">Número negativo</span>');
    }
    function delete_span(test){
     test.remove();
    }
    function BtnNextHide(Form_Numbers){
      if(Form_Numbers == 1){
        $("#next").hide();
      }else{
        $("#return").show();
        $("#next").show();
      }
    }
    function BtnReturnHide(Form_Numbers){
      if (Form_Numbers == 4) {
          $("#return").hide();
      }else{
          $("#return").show();
          $("#next").show();
        }
      }
    });
    function Dynamic_Country(){
      var selected_option = document.getElementById("select-country").value;
        if (selected_option == "CO") {
            $('#select-filial-col').show();
            $('#select-filial-col *').attr("disabled", false).off('click');
            $('#select-filial-pe').hide();
            $('#select-filial-pe *').attr("disabled", "disabled");
            $('#select-filial-gt').hide();
            $('#select-filial-gt *').attr("disabled", "disabled");
            $('#input_other_filial').hide();
            $('#input_other_filial input').removeClass('entrada');
            $('#input_other_filial *').attr("disabled", "disabled");
        } else if(selected_option == "PE"){
            $('#select-filial-pe').show();
            $('#select-filial-pe *').attr("disabled", false).off('click');
            $('#select-filial-col').hide();
            $('#select-filial-col *').attr("disabled", "disabled");
            $('#select-filial-gt').hide();
            $('#select-filial-gt *').attr("disabled", "disabled");
            $('#input_other_filial').hide();
            $('#input_other_filial input').removeClass('entrada');
            $('#input_other_filial *').attr("disabled", "disabled");
        }else if(selected_option == "GT"){
            $('#select-filial-gt').show();
            $('#select-filial-gt *').attr("disabled", false).off('click');
            $('#select-filial-pe').hide();
            $('#select-filial-pe *').attr("disabled", "disabled");
            $('#select-filial-col').hide();
            $('#select-filial-col *').attr("disabled", "disabled");
            $('#input_other_filial').hide();
            $('#input_other_filial input').removeClass('entrada');
            $('#input_other_filial *').attr("disabled", "disabled");
        }else if (selected_option == "other"){
            $('#select-filial-col').hide();
            $('#select-filial-col *').attr("disabled", "disabled");
            $('#select-filial-pe').hide();
            $('#select-filial-pe *').attr("disabled", "disabled");
            $('#select-filial-gt').hide();
            $('#select-filial-gt *').attr("disabled", "disabled");
            $('#input_other_filial').show();
            $('#input_other_filial input').addClass('entrada');
            $('#input_other_filial *').attr("disabled", false).off('click');
          }
        }
    $('#select-tipo-proyecto').change(function() {
      var selected_option_tp = document.getElementById(this.id).value;
        if (selected_option_tp == "Crecimiento") {
          $("#div-select-subcategoria-sost *").attr("disabled", "disabled").off('click');
          $("#div-select-subcategoria-sost").hide();
          $("#div-select-subcategoria-crec").show();
          $("#div-select-subcategoria-crec *").attr("disabled", false).off('click');
        } else {
          $("#div-select-subcategoria-crec *").attr("disabled", "disabled").off('click');
          $("#div-select-subcategoria-crec").hide();
          $("#div-select-subcategoria-sost").show();
          $("#div-select-subcategoria-sost *").attr("disabled", false).off('click');
        }
      });
    $(document).ready(function(){
      $("#return").click(function(){
        test();
        var select_option_gr = document.getElementById("select-grupo-est").value,
            select_subcategoria_sost = $('#div-select-subcategoria-sost').find(":selected").val(),
            select_tipo_proyecto = document.getElementById("select-tipo-proyecto").value,
            select_subcategoria_crec = $('#div-select-subcategoria-crec').find(":selected").val(),
            value_subcategoria = $('.select-subcategoria').val();
          if (select_tipo_proyecto == "Sostenimiento") {
            $('#form-title').text(select_subcategoria_sost + ' - ' + 'Información Detallada');
            mec_inputs(select_subcategoria_sost);
          }else {
            $('#form-title').text(select_option_gr + ' - ' + 'Información Detallada');
            mec_inputs(select_subcategoria_crec);
          }
        });
      function test(){
        var Table_Dates = new Array();
          $('.input100.entrada.table-date').each(function(){
            if ($(this).val() != "") {
              var date = new Date($(this).val());
              year = date.getFullYear();
              if ($("."+year).hasClass(year) == false) {
                Table_Dates.push(year);
              }
            }
          });
          loop_estimate(Table_Dates.sort());
        };
        function loop_estimate(Table_Dates){
          var length_thead = document.getElementById("tr-head").childElementCount;
          for (var i = 0; i < Table_Dates.length; i++) {
            // if (length_thead > 2) {
            if ($("."+Table_Dates[i]).hasClass(Table_Dates[i]) == false) {
          $('#last_th').before("<th id="+[i]+" class="+Table_Dates[i]+">"+Table_Dates[i]+"</th>");
            for (var j = 1; j < 5; j++) {
              $('#tr_'+[j]).after('<td><div class="input-icons"><i class="material-icons icon">attach_money</i><input class="input100 financiera inv-estimate '+[j]+'" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>');
            }
          }
        }
      }
      $('#select-subcategoria-sost').change(function() {
        var value_subcategoria = document.getElementById(this.id).value;
        mec_inputs(value_subcategoria);
        if (value_subcategoria == 'TI') {
          gen_valor_ti(value_subcategoria);
          $('#div-socio-est').hide();
          $('#Div-valor input').removeClass('form3');
          $('#div-cual2 input').removeClass('form3');
        } else {
          $('#div-socio-est').show();
          $('#Div-valor input').addClass('form3');
          $('#div-cual2 input').addClass('form3');
        }
        $('#div-cual-ti').hide();
        $('#div-cual-co').hide();
        $('#div-cual-ac').hide();
      });
      function mec_inputs(value_subcategoria){
        crec_flags(value_subcategoria);
        gen_valor_ti(value_subcategoria);
        atractividad_tecn(value_subcategoria);
      if(value_subcategoria == 'TI'){
        $('#div-MEC').show();
        $('#div-mec-info').show();
        $('#title-mec-info').text('Justificación');
      }else if(value_subcategoria == 'CREC'){
        $('#div-mec-info').show();
        $('#title-mec-info').text('n');
      }else{
        $('#div-mec-info').hide();
        $('#div-MEC').hide();
      }
    }
    function crec_flags(value_subcategoria){
      if(value_subcategoria == 'CREC'){
        $('.crec-flags').show();
        $('.crec-info-finaciera').show();
      }else{
        $('.crec-flags').hide();
        $('.crec-info-finaciera').hide();
      }
    }
    function gen_valor_ti(value_subcategoria){
      if(value_subcategoria == 'TI'){
        $('.div-gen-valor').hide();
        $('.div-gen-valor-ti').show();
        $("#div-peti").show();
        $('#div-just-peti').show();
      }else{
        $('.div-gen-valor').show();
        $('.div-gen-valor-ti').hide();
        $('#div-peti').hide();
        $('#div-just-peti').hide();
      }
    }
    function atractividad_tecn(value_subcategoria){
      if(value_subcategoria == 'CREC'){
        $('.comp-crec').show();
        $('.comp-co').hide();
        $('.comp-ti').hide();
        $('.comp-ac').hide();
      }else if(value_subcategoria == 'CO'){
        $('.comp-co').show();
        $('.comp-crec').hide();
        $('.comp-ti').hide();
        $('.comp-ac').hide();
      }else if(value_subcategoria == 'TI'){
        $('.comp-ti').show();
        $('.comp-co').hide();
        $('.comp-crec').hide();
        $('.comp-ac').hide();
      }else if(value_subcategoria == 'AC'){
        $('.comp-ac').show();
        $('.comp-co').hide();
        $('.comp-crec').hide();
        $('.comp-ti').hide();
      }
    }
    $('#select-socio-est').change(function(){
      var value_socio_est = document.getElementById(this.id).value;
      if (value_socio_est == 'SI') {
        $('.socio-est').show();
      }else {
        $('.socio-est').hide();
      }
    });
    $('#select-origen').change(function(){
      var value_origen = document.getElementById(this.id).value;
      if (value_origen == 'SI') {
        $('.origen-mandatorio').show();
      }else {
        $('.origen-mandatorio').hide();
      }
    });
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox').change(function(){
      var count_checkbox = $('input:checkbox:checked').length;
      if (count_checkbox >= 0 && count_checkbox <= 7) {
        if ($('#main_flag').hasClass("error-text") == false) {
          $('#main_flag').removeClass('warning-text');
          $('#main_flag').addClass('error-text');
        }
      }else if (count_checkbox >= 8 && count_checkbox <= 14) {
        $('#main_flag').removeClass('error-text');
        $('#main_flag').addClass('warning-text');
      }else if (count_checkbox >= 15 && count_checkbox <= 29) {
        $('#main_flag').removeClass('warning-text');
        $('#main_flag').addClass('primary-text');
      }
    });
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tema-dominante').change(function(){
      var count_individual_checkbox = $('input[name="first_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
        if ($('#first_flag').hasClass("error-text") == false) {
            $('#first_flag').removeClass('warning-text');
            $('#first_flag').addClass('error-text');
        }
      }else if (count_individual_checkbox == 1) {
        $('#first_flag').removeClass('error-text');
        $('#first_flag').addClass('warning-text');
      }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
        $('#first_flag').removeClass('warning-text');
        $('#first_flag').addClass('primary-text');
      }
    });
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tesis-inversion').change(function(){
      var count_individual_checkbox = $('input[name="second_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
        if ($('#second_flag').hasClass("error-text") == false) {
            $('#second_flag').removeClass('warning-text');
            $('#second_flag').addClass('error-text');
        }
      }else if (count_individual_checkbox == 1) {
        $('#second_flag').removeClass('error-text');
        $('#second_flag').addClass('warning-text');
      }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
        $('#second_flag').removeClass('warning-text');
        $('#second_flag').addClass('primary-text');
      }
    });
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.posicion-mercado').change(function(){
      var count_individual_checkbox = $('input[name="third_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
        if ($('#third_flag').hasClass("error-text") == false) {
          $('#third_flag').removeClass('warning-text');
          $('#third_flag').addClass('error-text');
        }
      }else if (count_individual_checkbox == 1) {
        $('#third_flag').removeClass('error-text');
        $('#third_flag').addClass('warning-text');
      }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
        $('#third_flag').removeClass('warning-text');
        $('#third_flag').addClass('primary-text');
      }
    });
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.modelo-intervencion').change(function(){
      var count_individual_checkbox = $('input[name="fourth_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
        if ($('#fourth_flag').hasClass("error-text") == false) {
            $('#fourth_flag').removeClass('warning-text');
            $('#fourth_flag').addClass('error-text');
        }
      }else if (count_individual_checkbox == 1) {
        $('#fourth_flag').removeClass('error-text');
        $('#fourth_flag').addClass('warning-text');
      }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
        $('#fourth_flag').removeClass('warning-text');
        $('#fourth_flag').addClass('primary-text');
      }
    });
    // QUINTO
    $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.capacidades').change(function(){
      var count_individual_checkbox = $('input[name="fifth_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
        if ($('#fifth_flag').hasClass("error-text") == false) {
            $('#fifth_flag').removeClass('warning-text');
            $('#fifth_flag').addClass('error-text');
        }
      }else if (count_individual_checkbox == 1) {
        $('#fifth_flag').removeClass('error-text');
        $('#fifth_flag').addClass('warning-text');
      }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
        $('#fifth_flag').removeClass('warning-text');
        $('#fifth_flag').addClass('primary-text');
      }
    });
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.gobierno-corporativo').change(function(){
    var count_individual_checkbox = $('input[name="sixth_checkbox"]:checked').length;
    if (count_individual_checkbox >= 0 && count_individual_checkbox <= 1) {
      if ($('#sixth_flag').hasClass("error-text") == false) {
          $('#sixth_flag').removeClass('warning-text');
          $('#sixth_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 2) {
      $('#sixth_flag').removeClass('error-text');
      $('#sixth_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 3 && count_individual_checkbox <= 5) {
      $('#sixth_flag').removeClass('warning-text');
      $('#sixth_flag').addClass('primary-text');
    }
  });
  $(document).ready(function(){
	   $('.event').on("dragstart", function (event) {
		     var dt = event.originalEvent.dataTransfer;
			   dt.setData('Text', $(this).attr('id'));
		 });
	   $('table td').on("dragenter dragover drop", function (event) {
		   event.preventDefault();
		   if (event.type === 'drop') {
			   var data = event.originalEvent.dataTransfer.getData('Text',$(this).attr('id'));
			   de=$('#'+data).detach();
			   de.appendTo($(this));
		   };
	    });
    });
    $(document).ready(function(){
      $('.input100.financiera.anual-estimate').change(function() {
        // $('#ingresos-anuales').attr('value');
        var count = 0;
        var result = 0;
        $('.input100.financiera.anual-estimate').each(function(){
          count += + 1;
          result += +$(this).val() / $('#input-anual-default-' + count).val();
        })
      $('#ingresos-anuales').val(result);
    });
    $(document).on('change', '.input100.financiera.inv-estimate', function() {
      var count = 0;
      var result_1 = 0;
      var result_2 = 0;
      var result_3 = 0;
      var result_4 = 0;
      $('.input100.financiera.inv-estimate.1').each(function(){
        count = 1;
        result_1 += +$(this).val() / $('#input-anual-default-' + 1).val();
      });
      $('.input100.financiera.inv-estimate.2').each(function(){
        result_2 += +$(this).val() / $('#input-anual-default-' + 2).val();
      });
      $('.input100.financiera.inv-estimate.3').each(function(){
        result_3 += +$(this).val() / $('#input-anual-default-' + 3).val();
      });
      $('.input100.financiera.inv-estimate.4').each(function(){
        result_4 += +$(this).val() / $('#input-anual-default-' + 4).val();
      });
      $('#Pres-total').val(result_1 + result_2 + result_3 + result_4);
    });
  });
  // Inicio funciones para validar campos (inputs).
  function validarNumero(numero){
    var Div_Id = $('#'+numero.id).parent().attr('id');
    count_alert = $('#'+Div_Id).find('.bubble.z-depth-2');
    if (numero.value == "" && count_alert.length == 0) {
      $('#'+Div_Id).append('<span class="bubble z-depth-2" style="font-size: small; color:red; margin-top: 10%">Campo vacío</span>');
    } else if (numero.value < 0){
      if (count_alert.length == 0) {
        $('#'+Div_Id).append('<span class="bubble z-depth-2" style="font-size: small; color:red; margin-top: 10%">Número negativo</span>');
      } else {
        $(count_alert).remove();
        $('#'+Div_Id).append('<span class="bubble z-depth-2" style="font-size: small; color:red; margin-top: 10%">Número negativo</span>');
      }
    }
    else {
        $(count_alert).remove();
    }
  }
  function validarTexto(texto){
    var Div_Id = $('#'+texto.id).parent().attr('id');
    count_alert = $('#'+Div_Id).find('.bubble.z-depth-2');
    if (texto.value == "" && count_alert.length == 0) {
      $('#'+Div_Id).append('<span class="bubble z-depth-2" style="font-size: small; color:red; margin-top: 10%">Campo vacío</span>');
    } else {
      $(count_alert).remove();
    }
  }
  /* Fin, funciones para validar Campos
      Inicio, Javascript/Jquery Atractividad Técnicas
    * Información reflejada en el span resistencia-info-span
    * Crecimiento
  */
  $(document).ready(function(){
    // CRECIMIENTO AT
    // Interconexión
    $('#select-interconexion').change(function(){
      var value_rest = document.getElementById(this.id).value;
      if (value_rest == 'FE') {
        $('#interconexion-span').text("Baja emisión y grandes usuarios industriales/comerciales o ciudades de más de 4 Millones de habitantes.");
      }else if (value_rest == 'FE-GU') {
        $('#interconexion-span').text("Sector petroquímico, Clúster o ciudades entre 3 y 4 Millones de habitantes.");
      }else if (value_rest == 'FE-CP') {
        $('#interconexion-span').text("Ciudades con menos de 3 Millones de habitantes.");
      }
     });
     // Complejidad del proyecto
     $('#select-complejidad-crec').change(function(){
       var value_rest = document.getElementById(this.id).value;
       if (value_rest == 'Alta') {
         $('#complejidad-crec-span-1').text("- Más de tres activos para construir o línea de más de 100 km.");
         $('#complejidad-crec-span-2').text("- CAPEX mayor de MUSD 100.");
         $('#complejidad-crec-span-3').text("- Requiere expertos senior.");
         $('#complejidad-crec-span-4').text("- Gran esfuerzo de ingeniería.");
       }else if (value_rest == 'Media') {
         $('#complejidad-crec-span-1').text("- Dos a tres activos para construir o línea entre 50 y 100 km.");
         $('#complejidad-crec-span-2').text("- CAPEX entre MUSD 20 y 100.");
         $('#complejidad-crec-span-3').text("- Requiere pocos expertos senior.");
         $('#complejidad-crec-span-4').text("- Esfuerzo mayor de ingeniería.");
       }else if (value_rest == 'Baja') {
         $('#complejidad-crec-span-1').text("- Un activo para construir.");
         $('#complejidad-crec-span-2').text("- CAPEX menor a MUSD 20.");
         $('#complejidad-crec-span-3').text("- No requiere recursos de expertos senior.");
         $('#complejidad-crec-span-4').text("- Esfuerzo normal de ingeniería.");
       }
      });
      // Gestión social
      $('#select-social').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'Bajo') {
          $('#social-span').text("Sin presencia de comunidades o grupos étnicos / zonas con antecedentes de negociaciones exitosas para proyectos lineales.");
        }else if (value_rest == 'Medio') {
          $('#social-span').text("Presencia de comunidades o grupos étnicos sin antecedentes de oposición.");
        }else if (value_rest == 'Alto') {
          $('#social-span').text("Presencia de comunidades y grupos étnicos con antecedentes de oposición.");
        }
       });
       // Gestión ambiental
       $('#select-gestion-ambiental').change(function(){
         var value_rest = document.getElementById(this.id).value;
         if (value_rest == 'Bajo') {
           $('#gestion-ambiental-span').text("Cambio menor de licencia ambiental.");
         }else if (value_rest == 'Medio') {
           $('#gestion-ambiental-span').text("Licenciamiento ambiental ante corporaciones.");
         }else if (value_rest == 'Alto') {
           $('#gestion-ambiental-span').text("Licenciamiento ambiental ante ANLA.");
         }
        });
        // Sinergia con otros poryectos o activos propios
        $('#select-sinergia-crec').change(function(){
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Alta') {
            $('#sinergia-crec-span').text("En sinergia con otras empresas, activos o proyectos del GEB o Proyectos futuros.");
          }else if (value_rest == 'Media') {
            $('#sinergia-crec-span').text("Cercano a proyectos o activos actuales del GEB.");
          }else if (value_rest == 'Baja') {
            $('#sinergia-crec-span').text("Sin conectividad o cercanía con proyectos o activos actuales del GEB.");
          }
        });
    });
    // Fin, atractividad técnica - crecimiento
    // CO AT
    $(document).ready(function(){
      $('#select-sinergia-co').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'SI') {
          $('#div-cual-co').show();
        }else{
          $('#div-cual-co').hide();
          $('#div-cual-ac').hide();
          $('#div-cual-ti').hide();
        }
      });
    });
    // TI AT
    $(document).ready(function(){
      // Complejidad del proyecto
      $('#select-complejidad-ti').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'Alta') {
          $('#complejidad-ti-span').text("Duración ejecución proyecto mayor a 8 meses, participación de más de 3 áreas de la empresa y un equipo de proyecto mayor a 5 personas.");
        }else if (value_rest == 'Media') {
          $('#complejidad-ti-span').text("Duración ejecución proyecto entre 4 y  8 meses, participación de 2 áreas diferentes a TI y un equipo de proyecto en promedio de 3 o 4 personas.");
        }else if (value_rest == 'Baja') {
          $('#complejidad-ti-span').text("Duración ejecución proyecto menor a 4 meses, participación de 1 o ninguna área diferente a TI y un equipo de proyecto de hasta 3 personas.");
        }
      });
      // Resistencia al cambio
      $('#select-resistencia-ti').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'Alta') {
          $('#span-resistencia-ti').text("No es un cambio necesario y en la compañía se ve como una carga adicional en las tareas.");
        }else if (value_rest == 'Media') {
          $('#span-resistencia-ti').text("Es un cambio necesario y en la compañía no se ve un cambio en el nivel de esfuerzo al realizar las tareas.");
        }else if (value_rest == 'Baja') {
          $('#span-resistencia-ti').text("Es un cambio necesario y en la compañía se ve como un alivio en las tareas.");
        }
      });
      $('#select-sinergia-ti').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'SI') {
          $('#div-cual-ti').show();
        }else{
          $('#div-cual-ti').hide();
          $('#div-cual-co').hide();
          $('#div-cual-ac').hide();
        }
      });
    });
    // AC AT
    $(document).ready(function(){
      // Restricciones regulatorias
      $('#select-restricciones-reg').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'no') {
          $('#span-restricciones-reg').text("Para implementarlo no se requieren trámites (p.e. licencias o permisos) que pongan en riesgo la ejecución o la retrasen.");
        }else if (value_rest == 'algunos') {
          $('#span-restricciones-reg').text("Para implementarlo se requieren algunos trámites (p.e. licencias o permisos) que podrían retrasar la ejecución.");
        }else if (value_rest == 'si') {
          $('#span-restricciones-reg').text("Para implementarlo se requieren  trámites (p.e. licencias o permisos) que ponen en riesgo la ejecución o la retrasan.");
        }
      });
      // Disponibilidad de los recursos
      $('#select-disponibilidad').change(function(){
        var value_disponibilidad = document.getElementById(this.id).value;
        if (value_disponibilidad == 'Alta') {
          $('#disponibilidad-span').text("GEB cuenta con recursos competentes suficientes para implementarlo.");
        }else if (value_disponibilidad == 'Media') {
          $('#disponibilidad-span').text("GEB debe contratar algunos recursos nuevos para implementarlo.");
        }else if (value_disponibilidad == 'Baja') {
          $('#disponibilidad-span').text("GEB debe contratar todos los recursos para implementarlo.");
        }
      });
      // Impacto en SST
      $('#select-impacto-sst').change(function(){
        var value_sst = document.getElementById(this.id).value;
        if (value_sst == 'Bajo') {
          $('#impacto-sst-info-span').text("No reducen la probebilidad de accidentes, incidentes y enfermedades laborales.");
        }else if (value_sst == 'Medio') {
          $('#impacto-sst-info-span').text("Se evidencia mejoras potenciales en al menos uno de los aspectos (salud o seguridad en el trabajo).");
        }else if (value_sst == 'Alto') {
          $('#impacto-sst-info-span').text("Reduce la probabilidad de accidentes, incidentes y enfermedades laborales.");
        }
      });
      // Sinergia con estrategias de gestión humana
      $('#select-sinergia').change(function(){
        var value_sinergia = document.getElementById(this.id).value;
        // console.log(value_sinergia);
        if (value_sinergia == 'Alta') {
          $('#sinergia-span').text("Permite apalancar las estrategias de gestión humana y calidad de vida.");
        }else if (value_sinergia == 'Media') {
          $('#sinergia-span').text("Apalanca alguna de las estrategias de gestión humana y calidad de vida.");
        }else if (value_sinergia == 'Baja') {
          $('#sinergia-span').text("No apalanca las estrategias de gestión humana y calidad de vida.");
        }
      });
      $('#select-sinergia-ac').change(function(){
        var value_rest = document.getElementById(this.id).value;
        if (value_rest == 'SI') {
          $('#div-cual-ac').show();
        }else{
          $('#div-cual-ac').hide();
          $('#div-cual-co').hide();
          $('#div-cual-ti').hide();
        }
      });
    });
  // Fin Javascript/Jquery Atractividad Técnicas
</script>
