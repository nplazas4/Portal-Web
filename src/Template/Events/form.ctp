<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de lecciones aprendidas','index','Events'],
        [ 'Registrar lección aprendida','form','Events'],
    ];
?>
<style>
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
            ['escape' => false,'class'=>'breadcrumb']);
          ?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu">
            <div class="container-contact100">
              <div class="notify bar-top" id="div-notify" data-notification-status="success"></div>
                <main style="display:none">
                    <div class="wrapper">
                        <nav>
                            <a href="#" class="button" id="btn-error" data-type="bottom-right" data-status="error">Bottom Right</a>
                            <a href="#" class="button" id="btn-success" data-type="bottom-right" data-status="success">Bottom Right</a>
                        </nav>
                    </div>
                </main>
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form active" id="Form-1">
                        <span class="contact100-form-title">Lección aprendida</span>
                        <span style="font-size: 15px !important;" class="contact100-form-sub-title">Los campos marcados con (*) son obligatorios.</span>
                        <div class="wrap-input100">
                            <span class="label-input100">Proyecto *</span>
                            <select name="select-project" id="select-project"></select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Nombre del usuario *</span>
                            <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_019_s_NombreUsuario" placeholder="Ingrese el nombre de usuario" readonly>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Cargo *</span>
                            <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_020_s_Cargo" placeholder="Ingrese el cargo">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Correo electrónico *</span>
                            <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_021_s_Correo" placeholder="Ingrese el correo" readonly>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Líder/Cargo funcional para consulta *</span>
                            <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_022_s_Lider" placeholder="Ingrese el líder/cargo funcional">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿Qué sucedio? *</span>
<<<<<<< HEAD
                            <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_006_s_QueSucedio" placeholder="Ingrese el líder/cargo funcional"></textarea>
=======
                            <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_006_s_QueSucedio" placeholder=""></textarea>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Cúando ocurrio? *</span>
                            <input class="input100 la-input datepicker1" autocomplete="off" type="text" name="la-input" id="lare_007_t_CuandoOcurrio" placeholder="Seleccione la fecha del evento">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿Durante que gestión o categoría? *</span>
                            <select name="la-select" id="lare_008_t_Durante">
                                <option value="Alcance - Definicion y gestion de los requerimientos y requisitos">Alcance - Definición y gestión de los requerimientos y requisitos</option>
                                <option value="Calidad: planificacion, control y aseguramiento">Calidad: planificación, control y aseguramiento</option>
                                <option value="Equipo de proyecto - Disponibilidad, desarrollo y funcionamiento">Equipo de proyecto - Disponibilidad, desarrollo y funcionamiento</option>
                                <option value="Estudios e Ingenieria">Estudios e Ingeniería</option>
                                <option value="Gestion Ambiental">Gestión Ambiental</option>
                                <option value="Gestion Humana">Gestión Humana</option>
                                <option value="Gestion Juridica-Legal">Gestión Jurídica-Legal</option>
                                <option value="Gestion SST">Gestión SST</option>
                                <option value="Gestion Social">Gestión Social</option>
                                <option value="Gestion de Adquisiciones, Compras y Contratacion">Gestión de Adquisiciones, Compras y Contratación</option>
                                <option value="Gestion de Comunicaciones">Gestión de Comunicaciones</option>
                                <option value="Gestion de Interesados">Gestión de Interesados</option>
                                <option value="Gestion de Riesgos">Gestión de Riesgos</option>
                                <option value="Gestion de Tierras">Gestión de Tierras</option>
                                <option value="Gestion de la Integracion">Gestión de la Integración</option>
                                <option value="Seguridad Fisica">Seguridad Física</option>
                                <option value="Tiempo: estimacion, desarrollo y control de cronograma">Tiempo: estimación, desarrollo y control de cronograma</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Aréa CORE *</span>
                            <select name="la-select" id="lare_009_t_SubProyecto">
                                <option value="Lineas de transmision">Líneas de transmisión</option>
                                <option value="Subestaciones">Subestaciones</option>
                                <option value="Gasoductos">Gasoductos</option>
                                <option value="Estaciones compresoras">Estaciones compresoras</option>
                                <option value="Tecnologia">Tecnología</option>
                                <option value="Administrativo Corporativo">Administrativo Corporativo</option>
                                <option value="Generacion">Generación</option>
                                <option value="Cogeneracion">Cogeneración</option>
                                <option value="Otro">Otro</option>
                                <option value="N/A">N/A</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿En que fase ocurrio?</span>
                            <select name="la-select" id="lare_010_t_Fase">
                                <option value=""></option>
                                <option value="RYOS">RYOS</option>
                                <option value="Fase I - Estructuracion">Fase I - Estructuración</option>
                                <option value="Fase II - Seleccion">Fase II - Selección</option>
                                <option value="Fase III - Planeacion">Fase III - Planeación</option>
                                <option value="Fase IV - Ejecucion">Fase IV - Ejecución</option>
                                <option value="Fase V - Cierre y Transferencia">Fase V - Cierre y Transferencia</option>
                                <option value="O&M">O&M</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100" style="display:none">
                            <span class="label-input100">¿Que Afecta? *</span>
                            <select name="la-select" id="lare_011_t_Afecta">
                                <option value="" disabled></option>
                                <option value="Lineas de transmision">Líneas de transmisión</option>
                                <option value="Subestaciones">Subestaciones</option>
                                <option value="Gasoductos">Gasoductos</option>
                                <option value="Estaciones compresoras">Estaciones compresoras</option>
                                <option value="Tecnologia">Tecnología</option>
                                <option value="Administrativo Corporativo">Administrativo Corporativo</option>
                                <option value="Generacion">Generación</option>
                                <option value="Cogeneracion">Cogeneración</option>
                                <option value="Otro">Otro</option>
                                <option value="N/A">N/A</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Tipo de evento *</span>
                            <select name="la-select" id="lare_012_TipoEvento">
                                <option value="Caso de Exito">Caso de éxito</option>
                                <option value="Oportunidad de Mejora">Oportunidad de mejora</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿Que cree que puede aprender? *</span>
                            <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_013_s_PuedeAprender" placeholder=""></textarea>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿Que puede mejorar o potenciar?</span>
                            <textarea class="materialize-textarea la-input-optl" autocomplete="off" type="text" name="la-input" id="lare_014_s_MejorarPotenciar" placeholder=""></textarea>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100" style="display:none">
                            <span class="label-input100">Tipo de registro *</span>
                            <select name="la-select" id="lare_005_t_TipoRegistro">
                                <option value="Actual">Actual</option>
                            </select>
                        </div>
                        <div class="project-content">
                            <div class="chart box-risk mb-6 pb-6">
                                <h2>Causas:</h2>
                                <div class="chart-risk">
                                    <div class="chart-risk-list">
                                        <ul class="row wrap" id="li-ul"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="container-contact100-form-btn mb-3 pb-6">
                                <button class="contact100-form-btn" type="button" id="main-btn">
                                    <span>
                                        Enviar
                                        <i class="material-icons right" aria-hidden="true">send</i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- DIVS Estructurales -->
                </div>
            </div>
        </div>
    </div>
    <div class="btns-floating btns-floating-right btns-floating-bottom mr-3 mb-3 pb-6">
      <button class="btn btn-floating btn-large white" id="load-gif" style="display:none">
          <a><i class="mdi material-icons pt-1" style="margin-top: 2%"> <?= $this->Html->image('gif/test5.gif') ?></i></a>
      </button>
    </div>
    <div class="btns-floating btns-floating-right btns-floating-bottom mr-3 mb-3 pb-6">
      <button class="btn btn-floating btn-large tertiary" id="add">
          <i class="mdi material-icons">add</i></a>
      </button>
    </div>
</div>
<?php for ($i= 1; $i < 100; $i++):?>
  <div id="detailEvents<?=$i?>" data-modal="<?=$i?>" class="modal">
   <div class="modal-content">
     <a class="modal-close close">
       <i class="material-icons">close</i>
     </a>
     <h2>Causa</h2>
       <!-- <span class="label-input100">RIESGO</span> -->
       <div class="wrap-input100" style="display:none">
           <span class="label-input100">Causas *</span>|
           <input class="la-input-li-<?=$i?> li-item" autocomplete="off" type="text" name="uuu_tab_id" value="Causas" readonly>
       </div>
       <div class="wrap-input100 mt-6 pt-6">
           <span class="label-input100">Breve descripción *</span>
           <input class="la-input-li-<?=$i?> li-item" autocomplete="off" type="text" name="short_desc" placeholder="" value="Procesos de Calidad">
       </div>
       <div class="wrap-input100" style="display:none">
           <span class="label-input100">Número *</span>
           <input class="la-input-li-<?=$i?> li-item" id="num-<?=$i?>" autocomplete="off" type="text" name="li_num" placeholder="" readonly>
       </div>
       <div class="wrap-input100">
           <span class="label-input100">¿Por qué sucedio? *</span>
           <textarea class="materialize-textarea la-input-li-<?=$i?> li-item" autocomplete="off" type="text" name="lare_016_s_PorQueSucedio" placeholder=""></textarea>
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
  for (var i = 1; i <= 10; i++) {
      var Calendar = document.querySelector('.datepicker' + [i]);
      M.Datepicker.init(Calendar, {
          format: 'mm-dd-yyyy',
          showClearBtn: true,
          i18n: {
              clear: 'borrar',
              done: 'Aceptar',
              cancel: 'cancelar',
              months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
              monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'Mayo', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
              weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
              weekdaysShort: ['Dom', 'Lun', 'Mar', 'Miér', 'Jue', 'Vie.', 'Sáb'],
              weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
          }
      });
  }
</script>
<script type="text/javascript">
$(document).ready(function(){

  $('.button').on('click', function(event) {
      var type = $(this).data('type');
      var status = $(this).data('status');
      $('.button').removeClass('is-active');
      $(this).addClass('is-active');
      $('.notify')
          .removeClass()
          .attr('data-notification-status', status)
          .addClass(type + ' notify')
          .addClass('do-show');
  });
  var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/projects/unifier/"+"<?=$current_user["V_ID_P_USER"]?>",
=======
      "url": "http://192.168.0.210:8080/ords/portal/projects/unifier/"+"<?=$current_user["V_ID_P_USER"]?>",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
          "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
          "cache-control": "no-cache"
      }
  }

  $.ajax(settings).done(function(response) {
      // console.log(response);
      $.each(response.items, function() {
          $('#select-project').append(new Option(this.name, this.project_id_p6));
          $('#select-project').formSelect();
      });
  });
  $('#lapa_019_s_NombreUsuario').val($('#name-element').text());
  $('#lapa_021_s_Correo').val($('#email-element').text());
  $("#main-btn").click(function() {
<<<<<<< HEAD
      validate();
      // $(this).attr('disabled', true);
  });
  function validate(){
=======
    validate();
    // $(this).attr('disabled', true);
  });

  function validate() {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    // INPUTS EMPTY
    var empty_inputs = $('.la-input').filter(function() {
        return !$(this).val()
    }).length;

    // MODAL EMPTY
    for (var i = 1; i <= $('#li-ul').children().length; i++) {
        var empty_modal = $('.la-input-li-' + [i]).filter(function() {
            return !$(this).val()
        }).length;
    }
    if (empty_modal != undefined) {
<<<<<<< HEAD
      var num = (empty_inputs + empty_modal);
      if (num == 0) {
        json_form();
      }
      else {
        alert_notification('Por favor revisar, campos vacíos.')
      }
    }
    else {
      alert_notification('Debe existir al menos una causa.')
    }
    // Llmar función que crea el json del fromulario de lecciones aprendidas
  }
  function json_form() {
      var array_form = {};
      $('.la-input').each(function() {
          array_form[$(this).attr('id')] = normalize($(this).val());
      });
      $('select[name="la-select"]').each(function() {
          array_form[$(this).attr('id')] = $(this).children(":selected").val();
      });
      array_form['_bp_lineitems'] = [];
      for (var i = 1; i <= $('#li-ul').children().length; i++) {
          var array_form_li = {};
          $('.la-input-li-' + [i]).each(function() {
              array_form_li[$(this).attr('name')] = normalize($(this).val());
          });
          array_form._bp_lineitems.push(array_form_li);
      }
      console.log(array_form);
      console.log(JSON.stringify({"data" : [array_form]}));
      json_format = JSON.stringify({
          "data": [array_form]
      });
      send_json(json_format);
  }
  var normalize = (function() {
      var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
          to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
          mapping = {};

      for (var i = 0, j = from.length; i < j; i++)
          mapping[from.charAt(i)] = to.charAt(i);

      return function(str) {
          var ret = [];
          for (var i = 0, j = str.length; i < j; i++) {
              var c = str.charAt(i);
              if (mapping.hasOwnProperty(str.charAt(i)))
                  ret.push(mapping[c]);
              else
                  ret.push(c);
          }
          return ret.join('');
      }

  })();
  $('#add').click(function() {
      var position = $('#li-ul').children().length;
      LineItems(position + 1);
      ModalLineItems(position + 1);
  });

  function LineItems(num) {
      $('#li-ul').append($('<li>', {
              class: 'd-flex col s12 m6 l4 xl3'
          })
          .append($('<a>', {
              id: num,
              href: '#detailEvents' + num,
              class: 'modal-trigger',
              text: 'Causa '+num
          })));
  }

  function ModalLineItems(num) {
      $('#num-' + num).val(num);
  }
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken'))?>;

  function send_json(json_data) {
      var project_id = $('#select-project').children(":selected").val()
      xhr_form = $.ajax({
          headers: {
              'X-CSRF-Token': csrfToken
          },
          method: "POST",
          dataType: "json",
          url: "<?php echo $this->Url->build(['controller'=>'Events','action'=>'send_event']);?>",
          data: {
              la_form: json_data,
              id_project: project_id
          },
          cache: true,
          beforeSend: function(xhr) {
              xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              $('#load-gif').show();
          },
          success: function(response) {
              console.log(response);
              $('#load-gif').hide();
              $('#add').hide();
              if (response != null) {
                  if (response.status == '200') {
                      $('#load-gif').hide();
                      $('#add').show();
                      success_text = response.event + ': ' + response.record_no;
                      success_notification(success_text);
                      $('#main-btn').attr('disabled', false);
                  } else {
                      alert_notification('La lección aprendida no ha sido enviada.')
                      $('#main-btn').attr('disabled', false);
                  }
              } else {
                  validate();
              }
          }
      });
  }
  // ALERTA
  function alert_notification(error_text) {
      if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
          $('#btn-error').click();
          $('#div-notify').text("");
          if ($('#div-notify').children().length == 0) {
              $('#div-notify').append($('<i>', {
                      id: 'icon-notify',
                      class: 'material-icons mr-2',
                      text: 'cancel'
                  }))
                  .append(error_text);
          }
          setTimeout(function() {
              $('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')
          }, 4000);
      }
  }
  function success_notification(success_text) {
      if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
          $('#btn-success').click();
          $('#div-notify').text("");
          if ($('#div-notify').children().length == 0) {
              $('#div-notify').append($('<i>', {
                      id: 'icon-notify',
                      class: 'material-icons mr-2',
                      text: 'check_circle'
                  }))
                  .append(success_text);
          } else {
              alert_notification('Error al enviar la lección aprendida.');
          }
          setTimeout(function() {
              $('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')
          }, 4000);
      }
  }
=======
        var num = (empty_inputs + empty_modal);
        if (num == 0) {
            json_form();
        } else {
            alert_notification('Por favor revisar, campos vacíos.')
        }
    } else {
        alert_notification('Debe existir al menos una causa.')
    }
    // Llmar función que crea el json del fromulario de lecciones aprendidas
}

function json_form() {
    var array_form = {};
    $('.la-input').each(function() {
        array_form[$(this).attr('id')] = normalize($(this).val());
    });
    $('select[name="la-select"]').each(function() {
        array_form[$(this).attr('id')] = $(this).children(":selected").val();
    });
    array_form['_bp_lineitems'] = [];
    for (var i = 1; i <= $('#li-ul').children().length; i++) {
        var array_form_li = {};
        $('.la-input-li-' + [i]).each(function() {
            array_form_li[$(this).attr('name')] = normalize($(this).val());
        });
        array_form._bp_lineitems.push(array_form_li);
    }
    console.log(array_form);
    console.log(JSON.stringify({
        "data": [array_form]
    }));
    json_format = JSON.stringify({
        "data": [array_form]
    });
    send_json(json_format);
}
var normalize = (function() {
    var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
        to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
        mapping = {};

    for (var i = 0, j = from.length; i < j; i++)
        mapping[from.charAt(i)] = to.charAt(i);

    return function(str) {
        var ret = [];
        for (var i = 0, j = str.length; i < j; i++) {
            var c = str.charAt(i);
            if (mapping.hasOwnProperty(str.charAt(i)))
                ret.push(mapping[c]);
            else
                ret.push(c);
        }
        return ret.join('');
    }

})();
$('#add').click(function() {
    var position = $('#li-ul').children().length;
    LineItems(position + 1);
    ModalLineItems(position + 1);
});

function LineItems(num) {
    $('#li-ul').append($('<li>', {
            class: 'd-flex col s12 m6 l4 xl3'
        })
        .append($('<a>', {
            id: num,
            href: '#detailEvents' + num,
            class: 'modal-trigger',
            text: 'Causa ' + num
        })));
}

function ModalLineItems(num) {
    $('#num-' + num).val(num);
}
var csrfToken = <?=json_encode($this->request->getParam('_csrfToken'))?> ;

function send_json(json_data) {
    var project_id = $('#select-project').children(":selected").val()
    xhr_form = $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        method: "POST",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Events','action'=>'send_event']);?>",
        data: {
            la_form: json_data,
            id_project: project_id
        },
        cache: true,
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            $('#load-gif').show();
        },
        success: function(response) {
            console.log(response);
            $('#load-gif').hide();
            $('#add').hide();
            if (response != null) {
                if (response.status == '200') {
                    $('#load-gif').hide();
                    $('#add').show();
                    success_text = response.event + ': ' + response.record_no;
                    success_notification(success_text);
                    $('#main-btn').attr('disabled', false);
                } else {
                    alert_notification('La lección aprendida no ha sido enviada.')
                    $('#main-btn').attr('disabled', false);
                }
            } else {
                validate();
            }
        }
    });
}
// ALERTA
function alert_notification(error_text) {
    if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
        $('#btn-error').click();
        $('#div-notify').text("");
        if ($('#div-notify').children().length == 0) {
            $('#div-notify').append($('<i>', {
                    id: 'icon-notify',
                    class: 'material-icons mr-2',
                    text: 'cancel'
                }))
                .append(error_text);
        }
        setTimeout(function() {
            $('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')
        }, 4000);
    }
}

function success_notification(success_text) {
    if (!$('#div-notify').hasClass('bottom-right notify do-show')) {
        $('#btn-success').click();
        $('#div-notify').text("");
        if ($('#div-notify').children().length == 0) {
            $('#div-notify').append($('<i>', {
                    id: 'icon-notify',
                    class: 'material-icons mr-2',
                    text: 'check_circle'
                }))
                .append(success_text);
        } else {
            alert_notification('Error al enviar la lección aprendida.');
        }
        setTimeout(function() {
            $('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')
        }, 4000);
    }
}
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
});
</script>
