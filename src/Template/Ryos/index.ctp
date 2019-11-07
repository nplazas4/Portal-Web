<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'RYOS','index','Ryos'],
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
                        <span class="contact100-form-title">
                            IDENTIFICACIÓN DE REQUERIMIENTOS Y OPORTUNIDADES (RYOS)
                        </span>
                        <span class="contact100-form-sub-title">
                            ENTRADA
                        </span>
                        <span style="font-size: 15px !important;" class="contact100-form-sub-title">Los campos marcador con (*) son obligatorios.</span>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Nombre Requerimiento u Oportunidad - RYOS *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB."
                                  onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB. Pueden ser de crecimiento o sostenimiento" autocomplete="off"
                                  type="text" name="t_name" onkeyup="validarTexto(this);" placeholder="Ingrese el nombre del requerimiento u oportunidad">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Gestor RYOS *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para libre diligenciamiento donde se indica quién es el responsable del RYOS que se registra, habitualmente es quien diligencia el formato." onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_gestor" placeholder="Ingrese el gestor">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Grupo Estratégico de Negocio (GEN) *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Listado desplegable, se debe elegir a qué GEN pertenece el RYOS o si pertenece a los proyectos corporativos." onclick="return false;">help_outline</i></span>
                            <select id="select-grupo-est" class="select-entrada" name="t_strategic_group">
                                <option>Distribución</option>
                                <option>Transmisión y transporte</option>
                                <option>Generación</option>
                                <option>Corporativo</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100" id="div-country">
                            <span class="label-input100">País *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Listado desplegable, se debe elegir en qué país se llevaría a cabo el proyecto." onclick="return false;">help_outline</i></span>
                            <select id="select-country" class="select-entrada" name="t_country" onchange="Dynamic_Country();">
                                <option value="CO">Colombia</option>
                                <option value="PE">Perú</option>
                                <option value="GT">Guatemala</option>
                                <option value="other">Otro</option>
                            </select>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100" id="div-main-country-other" style="display:none;">
                            <span class="label-input100">¿Cuál país? *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Ingrese el país donde se llevaría a cabo el proyecto." onclick="return false;">help_outline</i></span>
                            <div id="div-country-other"></div>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Filial *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Listado desplegable, se debe elegir a qué filial pertenece el RYOS." onclick="return false;">help_outline</i></span>
                            <div id="div-filial">
                                <select id="select-filial" class="select-entrada" name="t_filial">
                                    <option class="option-filial">GEB</option>
                                    <option class="option-filial">SUCURSAL</option>
                                    <option class="option-filial">TGI</option>
                                </select>
                            </div>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Vicepresidencia / Dirección *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para libre diligenciamiento, se debe indicar la vicepresidencia o dirección a la cual pertenece el RYOS." onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada" id="ryos-vice" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_vicepresidencia" placeholder="Ingrese la Vicepresidencia / dirección">
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Gerencia *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para libre diligenciamiento, se debe indicar la gerencia a la cual pertenece el RYOS." onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada" id="ryos-ger" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_gerencia" placeholder="Ingrese la gerencia">
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">¿Proyecto de origen Mandatorio? *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Indique si el proyecto tuvo o no origen en alguna directriz legal o estatutaria, bien sea de orden interno (GEB) o externo (Clientes, estado, entre otros)." onclick="return false;">help_outline</i></span>
                            <select id="select-origen" class="select-entrada" name="t_mandatory_proj">
                                <option class="option-origen">SI</option>
                                <option class="option-origen">NO</option>
                            </select>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Tipo de proyecto *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Seleccione el tipo de proyecto (crecimiento o sostenimiento)." onclick="return false;">help_outline</i></span>
                            <select id="select-tipo-proyecto" class="select-entrada" name="t_code_type">
                                <option value="CREC">Crecimiento</option>
                                <option value="SOST">Sostenimiento</option>
                            </select>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Subcategoria *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Seleccione la subcategoría correspondiente al tipo de proyecto seleccionado." onclick="return false;">help_outline</i></span>
                            <div id="div-select-subcategoria">
                                <select id="select-subcategoria" class="select-entrada" name="t_subcategory">
                                    <option class="option-subc-crec" value="CREC">Convocatorias</option>
                                    <option class="option-subc-crec" value="CREC">Crecimiento orgánico</option>
                                </select>
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <span class="label-input100">Fechas tentativas (AAAA/MM/DD) *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tabla para relacionar las fechas (en formato AAAA/MM/DD) de inicio y final de cada una de las fases del Modelo de Maduración y Creación de Valor (MMCV)." onclick="return false;">help_outline</i></span>
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
                                        <td><input id="input-phase-1" class="input100 entrada table-date datepicker1" readonly type="text" style="text-align:center" name="d_start_phase_i"></td>
                                        <td><input id="input-phase-2" class="input100 entrada table-date datepicker2" readonly type="text" style="text-align:center" name="d_finish_phase_i"></td>
                                    </tr>
                                    <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
                                        <td>Fase II</td>
                                        <td><input id="input-phase-3" class="input100 entrada table-date datepicker3" readonly type="text" style="text-align:center" name="d_start_phase_ii"></td>
                                        <td><input id="input-phase-4" class="input100 entrada table-date datepicker4" readonly type="text" style="text-align:center" name="d_finish_phase_ii"></td>
                                    </tr>
                                    <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
                                        <td>Fase III</td>
                                        <td><input id="input-phase-5" class="input100 entrada table-date datepicker5" readonly type="text" style="text-align:center" name="d_start_phase_iii"></td>
                                        <td><input id="input-phase-6" class="input100 entrada table-date datepicker6" readonly type="text" style="text-align:center" name="d_finish_phase_iii"></td>
                                    </tr>
                                    <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
                                        <td>Fase IV</td>
                                        <td><input id="input-phase-7" class="input100 entrada table-date datepicker7" readonly type="text" style="text-align:center" name="d_start_phase_iv"></td>
                                        <td><input id="input-phase-8" class="input100 entrada table-date datepicker8" readonly type="text" style="text-align:center" name="d_finish_phase_iv"></td>
                                    </tr>
                                    <tr class="wrap-input100 rs1-wrap-input100 validate-input entrada">
                                        <td>Fase V</td>
                                        <td><input id="input-phase-9" class="input100 entrada table-date datepicker9" readonly type="text" style="text-align:center" name="d_start_phase_v"></td>
                                        <td><input id="input-phase-10" class="input100 entrada table-date datepicker10" readonly type="text" style="text-align:center" name="d_finish_phase_v"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-6 pb-6 ml-auto mr-auto">
                          <section class="container-triangule" style="margin:auto !important;">
                              <div class="sec1" id="triangule-sec1"></div>
                              <div class="sec2" id="triangule-sec2"></div>
                              <div class="sec3" id="triangule-sec3"></div>
                              <div class="hollow"></div>

                              <div class="title1 main-font" id="title-sec2">ATRACTIVIDAD TÉCNICA</div>
                              <div class="title2 main-font" id="title-sec1">NIVEL DE RIESGO</div>
                              <div class="title3 main-font" id="title-sec3">VIABILIDAD FINANCIERA</div>

                              <div class="inner-cont" id="triangule-text">
                                  <div class="main-font">Alineación Estratégica</div>
                                  <?= $this->Html->image('logos/logo-geb.svg', ['width'=>'160px', 'style' => 'margin-top: 0.5em']) ?>
                              </div>
                          </section>
                        </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-2" style="display:none">
                      <span class="contact100-form-title" id="form-title"></span>
                      <span class="contact100-form-sub-title">
                          INFORMACIÓN GENERAL
                      </span>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-necesidad">
                          <span class="label-input100">Necesidad a resolver *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para diligenciamiento donde se debe registrar cuál es la necesidad o situación a la cual el RYOS da respuesta. Se deben incluir tantos datos de oferta, demanda, características, etc. como sean posibles." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-necesidad" name="t_necesidad" onkeyup="validarTexto(this);" class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just">
                          <span class="label-input100">Justificación del valor *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Establecer la importancia de realizar el proyecto, puede fundamentarse en la respuesta a las siguientes preguntas: ¿Qué beneficios o usos tendrá la idea? ¿Por qué la organización tendría que hacerlo? ¿Qué sucede si no se hace el RYOS? ¿Por qué es mejor que lo que existe? ¿Por qué es diferente de lo que existe?" onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-just" name="t_just_val" onkeyup="validarTexto(this);" class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-alcance">
                          <span class="label-input100">Alcance *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para diligenciamiento donde debe describirse en qué consiste el RYOS que está registrando, siendo preciso en cuanto a lo qué se haría en el proyecto y cuáles serían los productos o servicios entregables de ser aprobado." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-alcance" name="t_alcance" onkeyup="validarTexto(this);" class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-rest">
                          <span class="label-input100">Restricciones y exclusiones *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para diligenciamiento donde se deben especificar todas las restricciones (situaciones que no permitirían adelantar parcial o totalmente el proyecto) técnicas, sociales, ambientales, normativas, de tiempo entre otras que hayan sido identificadas, así mismo se incluye una descripción de qué no incluye el RYOS en su alcance, es decir qué NO se haría en el proyecto de ser aprobado." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-rest" name="t_restriccion" onkeyup="validarTexto(this);" class="textarea-general materialize-textarea"></textarea>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-sup">
                          <span class="label-input100">Supuestos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Factores que se consideran verdaderos, reales o ciertos sin prueba ni demostración, que garantiza el éxito del proyecto." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-sup" name="t_supuestos" onkeyup="validarTexto(this);" class="textarea-general materialize-textarea"></textarea>
                      </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-3" style="display:none">
                      <span class="contact100-form-sub-title">
                          ALINEAMIENTO ESTRATÉGICO
                      </span>
                      <?php for ($i=1; $i <= 3 ; $i++):?>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Objetivo # <?=$i?></span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Objetivo # <?=$i?>" onclick="return false;">help_outline</i></span>
                          <select  id = "t_objetive-<?=$i?>" name = "select-estrategic" class="select-estrategic objectives">
                          </select>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-app<?=$i?>">
                          <span class="label-input100">Aplicación</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Aplicación" onclick="return false;">help_outline</i></span>
                          <input class="input100 estrategic" autocomplete="off" onkeyup="validarTexto(this);" id="input-<?=$i?>" type="text" name="t_application_<?=$i?>" placeholder="Ingrese la aplicación">
                      </div>
                      <?php endfor;?>
                      <span class="contact100-form-sub-title" id="gen-valor">
                          Generación de Valor
                      </span>
                      <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100" style="color:#fff">text</span>
                          <select id="t_gen-val_1" name="select-gen" class="select-estrategic">
                          </select>
                      </div>
                      <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Aplicación</span>
                          <input class="input100 gen-valor" autocomplete="off" type="text" name="t_gen_application_1" placeholder="Ingrese la aplicación">
                      </div>
                      <!-- TI - GENERACIÓN DE VALOR -->
                      <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100" style="color:#fff">text</span>
                          <select id="t_gen-val_2" name="select-gen" class="select-estrategic">
                              <option selected value="default">Seleccione una opción</option>
                              <option class="work-option">Excelencia y eficiencia operacional</option>
                              <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                              <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                              <option class="work-option">Experiencia de usuario</option>
                              <option class="work-option">Gestión de la innovación</option>
                          </select>
                      </div>
                      <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Aplicación</span>
                          <input class="input100 ti" autocomplete="off" type="text" name="t_gen_application_2" placeholder="Ingrese la aplicación">
                      </div>
                      <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 pt-4">
                          <!-- <span class="label-input100">text</span> -->
                          <select id="t_gen-val_3" name="select-gen" class="select-estrategic">
                              <option selected value="default">Seleccione una opción</option>
                              <option class="work-option">Excelencia y eficiencia operacional</option>
                              <option class="work-option">Excelencia y eficiencia operacional</option>
                              <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                              <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                              <option class="work-option">Experiencia de usuario</option>
                              <option class="work-option">Gestión de la innovación</option>
                          </select>
                      </div>
                      <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Aplicación</span>
                          <input class="input100 ti" autocomplete="off" type="text" name="t_gen_application_3" placeholder="Ingrese la aplicación">
                      </div>
                      <!-- TI - CREC MEC -->
                      <div class="mec-exclusive wrap-input100 rs1-wrap-input100" id="div-mec">
                          <span class="label-input100">¿Está en el MEC? *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el MEC?" onclick="return false;">help_outline</i></span>
                          <select id="t_mec" name="select-mec" class="select-estrategic">
                              <option value="default" selected disabled>Seleccione una opción</option>
                              <option>SI</option>
                              <option>NO</option>
                          </select>
                      </div>
                      <div class="mec-exclusive wrap-input100 rs1-wrap-input100 pt-2">
                          <span class="label-input100">Justificación *</span>
                          <input class="input100 mec" autocomplete="off" id="just-mec" type="text" name="t_just_mec" placeholder="Ingrese la aplicación">
                      </div>
                    <!-- FIN MEC -->
                    <!-- PETI -->
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-peti" style="display:none">
                        <span class="label-input100">¿Está en el PETI (Plan estratégico de TI)? *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el PETI?" onclick="return false;">help_outline</i></span>
                        <select id="t_peti" name="select-peti" class="select-estrategic">
                            <option value="default" selected disabled>Seleccione una opción</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just-peti" style="display:none">
                        <span class="label-input100">Justificación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 peti" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_just_peti" id="input-just-peti" placeholder="Ingrese la justificación">
                    </div>
                    <!-- CRECIMIENTO FLAGS -->
                    <span class="crec-flags contact100-form-sub-title">
                        Alineamiento Estratégico (Fit Estratégico)
                        <span class="icon-download"><i class="material-icons error-text" id="main_flag">flag</i></span>
                    </span>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tema-dominante">
                        <span class="label-input100">1. Tema Dominante *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="first_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_1" type="checkbox" name="first_checkbox" />
                                <span>En la cadena energética de baja emisión</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_2" type="checkbox" name="first_checkbox" />
                                <span>Empresa top 1 o 2 en cada mercado o potencializa la entrada a nuevas regiones</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_3" type="checkbox" name="first_checkbox" />
                                <span>Enmarcada bajo las premisas clave de cada GEN (focos, regiones y destrezas)</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_4" type="checkbox" name="first_checkbox" />
                                <span>Perspectiva de rentabilidad de largo plazo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_5" type="checkbox" name="first_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app5" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_application_flag_1" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tesis-inversion">
                        <span class="label-input100">2. Tesis de Inversión *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="second_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_6" type="checkbox" name="second_checkbox" />
                                <span>Perspectiva de dividendos creciente</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_7" type="checkbox" name="second_checkbox" />
                                <span>Barreras de entrada vía altas inversiones de capital</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_8" type="checkbox" name="second_checkbox" />
                                <span>Mercados regulados</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_9" type="checkbox" name="second_checkbox" />
                                <span>Bajo niveles relativos de riesgo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_10" type="checkbox" name="second_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app6">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app6" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_application_flag_2" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox posicion-mercado">
                        <span class="label-input100">3. Posición de Mercado *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="third_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_11" type="checkbox" name="third_checkbox" />
                                <span>Exposición a buenas perspectivas demográficas de largo plazo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_12" type="checkbox" name="third_checkbox" />
                                <span>Institucionalidad regulatoria y jurídica confiable</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_13" type="checkbox" name="third_checkbox" />
                                <span>Geografías en expansión y desarrollo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_14" type="checkbox" name="third_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app7">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app7" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_application_flag_3" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox modelo-intervencion">
                        <span class="label-input100">4. Modelo de Intervención *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="fourth_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_15" type="checkbox" name="fourth_checkbox" />
                                <span>Capacidad de intervenir proactivamente en la agenda de crecimiento</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_16" type="checkbox" name="fourth_checkbox" />
                                <span>Compartir estándares de sostenibilidad, inversión social y valor compartido</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_17" type="checkbox" name="fourth_checkbox" />
                                <span>Relacionamiento con comunidades y grupos de interés, generando valor compartido</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_18" type="checkbox" name="fourth_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app8">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app8" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_application_flag_4" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox capacidades">
                        <span class="label-input100">5. Capacidades Técnicas, Financieras y de Gestión de Riesgos Clave *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="fifth_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_19" type="checkbox" name="fifth_checkbox" />
                                <span>Experiencia en regiones comparables</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_20" type="checkbox" name="fifth_checkbox" />
                                <span>Acceso a tecnología y mejores prácticas gerenciales</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_21" type="checkbox" name="fifth_checkbox" />
                                <span>Capacidad financiera alineada con la inversión y acceso a capital</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_22" type="checkbox" name="fifth_checkbox" />
                                <span>Acceso a mercados y reputación superior</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_23" type="checkbox" name="fifth_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app9">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app9" autocomplete="off" type="text" name="t_application_flag_5" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox gobierno-corporativo">
                        <span class="label-input100">6. Gobierno Corporativo *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="sixth_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_24" type="checkbox" name="sixth_checkbox" />
                                <span>Socios: Acuerdos de accionistas alineados en intereses de largo plazo del Grupo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_25" type="checkbox" name="sixth_checkbox" />
                                <span>Aliados: Acuerdos de niveles de servicio, aspectos técnicos o de gestión de a través de relaciones contractuales a mediano y largo plazo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_26" type="checkbox" name="sixth_checkbox" />
                                <span>Estándares de transparencia y reputación del más alto nivel</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_27" type="checkbox" name="sixth_checkbox" />
                                <span>Identificación y manejo de conflictos de interés con otras compañías del grupo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_28" type="checkbox" name="sixth_checkbox" />
                                <span>Relación simétrica y colaborativa</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
                                <input class="checkbox-flag" id="b_checkbox_29" type="checkbox" name="sixth_checkbox" />
                                <span>No aplica</span>
                            </label>
                        </p>
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" id="div-app10">
                        <span class="label-input100">Aplicación *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 flag" id="app10" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="t_application_flag_6" placeholder="Ingrese la aplicación">
                    </div>
                    <!-- SOCIO ESTRATÉGICO -->
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-socio-est">
                        <span class="label-input100">Visualización de un socio estratégico</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Visualización de un socio estratégico" onclick="return false;">help_outline</i></span>
                        <select id="t_socio_est" name="select-socio-est" class="select-estrategic">
                            <option value="default" selected>Seleccione una opción</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>
                    </div>
                    <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual2">
                        <span class="label-input100">¿Cuál? (opcional) *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál? (opcional)" onclick="return false;">help_outline</i></span>
                        <input class="input100 socio" id="t_cual_soc_est" onkeyup="validarTexto(this);" autocomplete="off" type="text" name="" placeholder="">
                    </div>
                    <span class="socio-est contact100-form-sub-title" style="display:none">Porcentaje de un socio estratégico</span>
                    <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="Div-valor">
                        <span class="label-input100">Valor tentativo *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 socio" autocomplete="off" type="number" id="n_tentative_val" onkeyup="validarNumero(this);" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px">
                    </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-4" style="display:none">
                      <h1>4</h1>
                    </form>
                    <form class="contact100-form validate-form" id="Form-5" style="display:none">
                      <h1>5</h1>
                    </form>
                    <form class="contact100-form validate-form" id="Form-6" style="display:none">
                      <h1>6</h1>
                      <div class="container-contact100-form-btn">
                          <button class="contact100-form-btn" type="button" id="main-btn">
                              <span>
                                  Enviar
                                  <i class="material-icons right" aria-hidden="true">send</i>
                              </span>
                          </button>
                      </div>
                    </form>
                    <!-- DIVS Estructurales -->
                </div>
            </div>
        </div>
    </div>
    <div class="btns-floating btns-floating-right btns-floating-bottom mr-6">
      <button class="btn btn-floating btn-large tertiary" id="next">
          <i class="mdi material-icons">arrow_downward</i></a>
      </button>
    </div>

    <div class="btns-floating btns-floating-right btns-floating-bottom mb-6 pb-6 mr-6">
      <button class="btn btn-floating btn-large tertiary" id="return" style="display:none;">
          <i class="mdi material-icons">arrow_upward</i></a>
      </button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  for (var i = 1; i <= 10; i++) {
      var Calendar = document.querySelector('.datepicker' + [i]);
      M.Datepicker.init(Calendar, {
          format: 'yyyy-mm-dd',
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
// var array_form = {};
// CLICK ALERT BTN
$(document).ready(function() {
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
// DESPLAZAMIENTO ENTRE FORMS (FLECHAS)
    // BOTÓN DE REGRESO
      var Form_Numbers = null;
      $("#return").click(function() {
          Form_Numbers = $('.contact100-form.validate-form.active').index();
          BtnNextHide(Form_Numbers);
          if ($('.contact100-form.validate-form.active').index() > 0) {
              $('.contact100-form.validate-form').hide();
              $('.contact100-form.validate-form.active').removeClass("active").prev().addClass("active").show();
          }
          $('body,html').animate({
              scrollTop: 0
          }, 500);
      });
      // BÓTON SIGUIENTE
      $("#next").click(function() {
          visible_form();
          json_form();
      });
  });
 function next_module(empty_inputs) {
     // switch (empty_inputs) {
     //     case 0:
     //         if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length - 1) {
     //             $('.contact100-form.validate-form.active').hide();
     //             $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
     //         }
     //         $('#return').show();
     //         $('body,html').animate({
     //             scrollTop: 0
     //         }, 500);
     //         break;
     //     default:
     //
     // }
     // if (empty_inputs >= 0) {
       if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length - 1) {
           $('.contact100-form.validate-form.active').hide();
           $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
       }
       $('#return').show();
       $('body,html').animate({
           scrollTop: 0
       }, 500);
     // } else {
     error_text = 'Por favor revisar, campos vacíos.';
     alert(error_text);
     // }
 }
  // FUNCIÓN QUE OCULTA EL BÓTON DE REGRESAR CUANDO SE ENCUENTRA EN EL FORMULARIO 1
  function BtnNextHide(Form_Numbers) {
      if (Form_Numbers == 1) {
          $("#return").hide();
      } else {
          $("#return").show();
          $("#next").show();
      }
  }
  // INICIO JQUERY FORM 1 - ENTRADA
  function visible_form() {
    var filial_value = document.getElementById('select-filial').value,
        subcategory_value = document.getElementById('select-subcategoria').value,
        est_group_val = document.getElementById("select-grupo-est").value,
        project_type = document.getElementById('select-tipo-proyecto').value;
    if ($('#Form-1').is(":visible")) {
        validate_tentative_dts();
        var empty_inputs = $('.input100.entrada').filter(function() {
            return !$(this).val()
        }).length;
        // Título FORM 2
        if (project_type == "SOST") {
            $('#form-title').text(subcategory_value + ' - ' + 'Información Detallada');
        } else {
            $('#form-title').text(est_group_val + ' - ' + 'Información Detallada');
        }
        console.log(empty_inputs);
    }
    if ($('#Form-2').is(":visible")) {
        estrategic_objectives(filial_value);
        gen_value(subcategory_value);
        var empty_inputs = $('.textarea-general').filter(function() {
            return !$(this).val()
        }).length;
        console.log(empty_inputs);
    }
    next_module(empty_inputs);
    show_mec(project_type, subcategory_value);
  }
  // FECHAS TENTATIVAS
  function validate_tentative_dts() {
      var i, error_text;
      for (i = 1; i < 10; i++) {
          var input_next = i + 1,
              cont_success;
          if ($('#input-phase-' + i).val() != '' && $('#input-phase-' + input_next).val() != '') {
              if ($('#input-phase-' + i).val() <= $('#input-phase-' + input_next).val()) {
                  cont_success = i;
              } else {
                  error_text = 'El orden de las fechas tentativas no son logicas.';
                  alert(error_text);
              }
          } else {
              error_text = 'Por favor revisar, campos vacíos.'
              alert(error_text);
          }
      }
  }
  function Dynamic_Country() {
      var selected_option = document.getElementById("select-country").value,
          filial;
      // Remover campos "Cuál?"
      $('#filial-cual').remove();
      $('#country-cual').remove();
      $('#div-main-country-other').hide();
      // Agregar Clase select-entrada necdesario para each JSON
      $('#select-filial').addClass('select-entrada');
      $('#select-country').addClass('select-entrada');
      // Condicionales para rellenar el select de filial según el código de país seleccionado
      if (selected_option == "CO") {
          filial = ['TGI', 'SUCURSAL', 'GEB'];
      } else if (selected_option == "PE") {
          filial = ['CONTUGAS', 'CÁLIDDA', 'CÁLIDDA ENERGÍA'];
      } else if (selected_option == "GT") {
          var filial = ['EEBIS', 'TRECSA'];
      } else if (selected_option == "other") {
          $('#div-filial *').hide();
          $('#select-filial').removeClass('select-entrada');
          $('#select-country').removeClass('select-entrada');
          $('#div-main-country-other').show();
          $('#div-filial').append($('<input>', {id: 'filial-cual', name : 't_filial',class : 'input100 entrada', placeholder : '¿Cuál?'}));
          $('#div-country-other').append($('<input>', {id: 'country-cual', name : 't_country' ,class : 'input100 entrada', placeholder : '¿Cuál?'}));
      }
      filial_append(filial);
  }

  function filial_append(filial) {
      $('#select-filial option').remove();
      $.each(filial, function() {
          $('#div-filial').show();
          $('#select-filial').append(new Option(this));
          $('#select-filial').formSelect();
      });
  }
  // ENTRADA SUBCATEGORÍA
  $('#select-tipo-proyecto').change(function() {
      var selected_option_tp = document.getElementById(this.id).value,
          subcategory = [];
      if (selected_option_tp == 'CREC') {
          subcategory = ['Convocatorias', 'Crecimiento orgánico'];
      } else {
          subcategory = ['Continuidad operacional', 'Tecnología de información', 'Administrativos corporativos']
      }
      subcategory_append(subcategory)
  });

  function subcategory_append(subcategory) {
      $('#select-subcategoria option').remove();
      $.each(subcategory, function() {
          $('#select-subcategoria').append(new Option(this));
          $('#select-subcategoria').formSelect();
      });
  }
  // ALERTA
  function alert(error_text) {
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
  // FIN JQUERY FORM 1 - ENTRADA
  // INICIO JQUERY FORM 3
  function estrategic_objectives(filial_value){
    var array_obj_est = [];
    switch (filial_value) {
      // COLOMBIA
      case 'GEB':
        array_obj_est = [
                          '1. Maximizar dividendos de largo plazo',
                          '2. Optimizar la estructura de capital y costos de la deuda',
                          '3. Maximizar la eficiencia financiera',
                          '4. Mejorar el posicionamiento reputacional del GEB',
                          '5. Dinamizar el crecimiento rentable de la compañía y camino a la Mega',
                          '6. Fortalecer el Gobierno Corporativo, la relación con Accionistas y potenciales socios',
                          '7. Desarrollar nuestros procesos con Excelencia Operacional',
                          '8. Participar proactivamente en la agenda regulatoria y en la  mitigación y control de riesgos',
                          '9. Garantizar la implementación de una cultura de autocuidado y prevención en las empresas del grupo',
                          '10. Consolidar el proceso de Sostenibilidad, Inversión Social y Valor Compartido',
                          '11. Implementar el  plan de liderazgo alineado con los objetivos GEB en  el marco de un adecuado ambiente laboral',
                          '12. Conducir al GEB hacia la transformación digital'
                        ];
        break;
      case 'SUCURSAL':
        array_obj_est = [
                          '1. Aumentar el valor del negocio mediante un eficiente manejo del mismo',
                          '2. Optimizar Costos y Gastos',
                          '3. Cumplir la promesa de valor hacia nuestros clientes (disponibilidad, confiabilidad, servicio)',
                          '4. Crecer Sosteniblemente en nuevos negocios en el STN, STR y Conexiones Privadas',
                          '5. Gestionar la agenda de crecimiento en el STN y STR y el portafolio de servicios con privados',
                          '6. Implementar mejores prácticas, tecnologías complementarias  e innovación en el negocio',
                          '7. Administrar los riesgos del negocio para asegurar la continuidad del mismo',
                          '8. Consolidar los procesos del negocio para el funcionamiento de la sucursal',
                          '9. Participar proactivamente en el desarrollo regulatorio y normativo',
                          '10. Fortalecer la cultura de SST en las actividades del Negocio',
                          '11. Implementar proyectos de Sostenibilidad, Inversión Social y Valor Compartido que impacten la cadena de valor del negocio',
                          '12. Promover la gestión del conocimiento para el negocio',
                          '13. Desarrollar las competencias de los colaboradores para afrontar los nuevos retos del negocio',
                          '14. Contribuir en el proceso de transformación digital del grupo'
                        ];
        break;
      case 'TGI':
        array_obj_est = [
                          '1. Dinamizar el crecimiento rentable',
                          '2. Maximizar la eficiencia financiera',
                          '3. Lograr alternativas de remuneración para la infraestructura Ballena-Barranca',
                          '4. Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria',
                          '5. Estructurar nuevos negocios y servicios para el crecimiento de la Empresa',
                          '6. Desarrollar proyectos de infraestructura asegurando el MMCV',
                          '7. Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura',
                          '8. Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo',
                          '9. Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos',
                          '10. Transformar la organización con tecnologías de información y procesos de innovación del negocio'
                        ];
        break;
      //PERÚ
      case 'CONTUGAS':
        array_obj_est = [
                          '1. Crecer el valor de la empresa con rentabilidad por encima de la media de la industria, manteniendo la solidez financiera',
                          '2. Promover la inversión de nuevos proyectos de uso intensivo de gas natural en Ica',
                          '3. Conectar rentablemente grandes industrias a gas natural',
                          '4. Activar demanda rentable de gas en maquinaria amarilla y flotas corporativas',
                          '5. Aumentar cobertura y la saturación promedio en la concesión aumentando simultáneamente los consumos per cápita',
                          '6. Gestionar la recuperación de cartera para la sostenibilidad del negocio',
                          '7. Asegurar las condiciones óptimas de la infraestructura para el crecimiento',
                          '8. Implementar buenas prácticas de gestión de clase mundial',
                          '9. Contar con un equipo humano idóneo que asegure el cumplimiento de los objetivos Compañía'
                        ];
        break;
      case 'CÁLIDDA':
        array_obj_est = [
                          '1. Maximizar dividendos durante el periodo de concesión',
                          '2. Maximizar la Eficiencia Financiera (EBITDA/ROE)',
                          '3. Optimizar la gestión de cobranza y financiamiento',
                          '4. Incrementar los ingresos regulados y no regulados (nuevos negocios estratégicos)',
                          '5. Maximizar la productividad de las unidades de negocio',
                          '6. Mejorar el posicionamiento reputacional de la compañía',
                          '7. Asegurar la satisfacción de nuestros clientes',
                          '8. Participar positivamente en la agenda regulatoria y mitigar los riesgos de la industria',
                          '9. Desarrollar una aproximación estratégica hacia nuestros stakeholders',
                          '10. Impulsar la transformación tecnológica y digital de los procesos',
                          '11. Desarrollar una cultura de prevención y autocuidado en la compañía',
                          '12. Asegurar la incorporación del enfoque de sostenibilidad en nuestra operación',
                          '13. Interiorizar la cultura de innovación y productividad en la organización',
                          '14. Fortalecer las habilidades, aptitudes y competencias de los recursos humanos, con enfoque en resultados',
                          '15. Consolidar la organización como una de las mejores para trabajar en la industria'
                        ];
        break;
      case 'CÁLIDDA ENERGÍA':
        array_obj_est = [
                          '1. Maximizar dividendos durante el periodo de concesión',
                          '2. Maximizar la Eficiencia Financiera (EBITDA/ROE)',
                          '3. Optimizar la gestión de cobranza y financiamiento',
                          '4. Incrementar los ingresos regulados y no regulados (nuevos negocios estratégicos)',
                          '5. Maximizar la productividad de las unidades de negocio',
                          '6. Mejorar el posicionamiento reputacional de la compañía',
                          '7. Asegurar la satisfacción de nuestros clientes',
                          '8. Participar positivamente en la agenda regulatoria y mitigar los riesgos de la industria',
                          '9. Desarrollar una aproximación estratégica hacia nuestros stakeholders',
                          '10. Impulsar la transformación tecnológica y digital de los procesos',
                          '11. Desarrollar una cultura de prevención y autocuidado en la compañía',
                          '12. Asegurar la incorporación del enfoque de sostenibilidad en nuestra operación',
                          '13. Interiorizar la cultura de innovación y productividad en la organización',
                          '14. Fortalecer las habilidades, aptitudes y competencias de los recursos humanos, con enfoque en resultados',
                          '15. Consolidar la organización como una de las mejores para trabajar en la industria'
                        ];
        break;
      // GUATEMALA
      case 'EBBIS':
        array_obj_est = [
                          '1. Maximizar dividendos de largo plazo',
                          '2. Maximizar la eficiencia financiera',
                          '3. Consolidar la imagen y reputación de EEBIS con actores clave',
                          '4. Fortalecer el gobierno corporativo',
                          '5. Gestionar los riesgos proactivamente buscando la mitigación y control de los mismos',
                          '6. Garantizar la implementación de una cultura de autocuidado y prevención',
                          '7. Asegurar la ejecución de los proyectos en los tiempos acordados y bajo presupuesto aprobado',
                          '8. Implementar procesos clave de la transformación digital'
                        ];
        break;
      case 'TRECSA':
        array_obj_est = [
                          '1. Maximizar dividendos de largo plazo',
                          '2. Optimizar los recursos de inversión del proyecto',
                          '3. Maximizar la eficiencia financiera',
                          '4. Consolidar la imagen y reputación de Trecsa con los actores clave',
                          '5. Profundizar los activos y garantizar el crecimiento competitivo de los proyectos',
                          '6. Fortalecer el Gobierno Corporativo',
                          '7. Implementar el Sistema de Gestión Integrado',
                          '8. Garantizar la implementación de una cultura de autocuidado y prevención',
                          '9. Lograr los hitos priorizados de Desarrollo Sostenible de conformidad con el cronograma de obra',
                          '10. Gestionar los riesgos proactivamente buscando la mitigación y control de los mismos',
                          '11. Asegurar la ejecución de los proyectos en los tiempos acordados y bajo presupuesto aprobado',
                          '12. Consolidar una estructura y un equipo de trabajo comprometido y alineado con los objetivos, enmarcado en un adecuado ambiente laboral',
                          '13. Implementar procesos clave de la transformación digital'
                        ];
        break;
      //OTHER
      case 'OTHER':
        array_obj_est = [];
        break;
      default:
        console.log('error: valor invalido.');
    }
    obj_est_append(array_obj_est);
  };
  function obj_est_append(objectives) {
      $('.select-estrategic.objectives option').remove();
      $('.select-estrategic.objectives').append(new Option('Seleccione una opción', 'default'));
      $.each(objectives, function() {
          $('.select-estrategic.objectives').append(new Option(this));
          $('.select-estrategic.objectives').formSelect();
      });
  }
  function gen_value(subcategory_value){
    var array_gen_val = [];
    // console.log(subcategory_value);
    $('.input100.ti-exclusive').removeClass('gen-valor');
    $('.socio-est').hide();
    $('.socio-est input').removeClass('active');
    switch (subcategory_value) {
      case 'Tecnología de información':
          array_gen_val = [
                            'Excelencia y eficiencia operacional',
                            'Integración y adopción de tecnologías del negocio y de la información',
                            'Gestión de la información e inteligencia de negocio',
                            'Experiencia de usuario',
                            'Gestión de la innovación'
                          ];
          $('.div-gen-valor-ti').show();
          $('.input100.ti').addClass('gen-valor ti-exclusive');
          $('.input100.ti-exclusive').removeClass('ti');
          // console.log($('.div-gen-valor-ti input').val());
        break;
      default:
        array_gen_val = [
                          'Maximización de dividendos de largo plazo para los accionistas',
                          'Continuidad estratégica y fortalecimiento operacional permanente',
                          'Profundización del crecimiento de cada activo',
                          'Ninguna'
                        ];
        $('.div-gen-valor-ti').hide();
        // $('.div-gen-valor-ti input').val('');
    }
    // REGRESAR LOS SELECT DE ALINEAMIENTO ESTRATÉGICOS A LA PRIMERA POSICIÓN
    var estrategic_select = $('.select-estrategic');
    estrategic_select.prop('selectedIndex', 0); //Sets the first option as selected
    estrategic_select.formSelect();
    gen_val_append(array_gen_val);
  }
  function gen_val_append(array_gen_val) {
      $('#t_gen-val_1 option').remove();
      $('#t_gen-val_1').append(new Option('Seleccione una opción', 'default'));
      $.each(array_gen_val, function() {
          $('#t_gen-val_1').append(new Option(this));
          $('#t_gen-val_1').formSelect();
      });
  }
  // CAMPOS DE MEC Y BANDERAS (SOLO CRECIMIENTO)
  function show_mec(project_type, subcategory){
    $('#div-socio-est').show();
    $('#div-peti').hide();
    $('#div-just-peti').hide();
    $('#input-just-peti').removeClass('active');
    if (project_type == 'CREC' || subcategory == 'Tecnología de información') {
      $('.mec-exclusive').show();
      $('.input100.mec').addClass('active');
      if (project_type == 'CREC') {
        $('.crec-flags').show();
        $('.input100.flag').addClass('active');
        $('.checkbox-flag').addClass('active');
      } else {
        $('#div-peti').show();
        $('#div-just-peti').show();
        $('#div-socio-est').hide();
        $('.crec-flags').hide();
        $('#input-just-peti').addClass('active');
        $('.input100.flag.active').removeClass('active');
        $('.checkbox-flag.active').removeClass('active');
      }
    } else {
      $('.mec-exclusive').hide();
      $('.input100.mec.active').removeClass('active');
      $('.crec-flags').hide();
      $('.input100.flag.active').removeClass('active');
      $('.checkbox-flag.active').removeClass('active');
    }
  }
  // FLAGS COLORS
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox').change(function() {
      var count_checkbox = $('input:checkbox:checked').length;
      if (count_checkbox >= 0 && count_checkbox <= 7) {
          if ($('#main_flag').hasClass("error-text") == false) {
              $('#main_flag').removeClass('warning-text');
              $('#main_flag').addClass('error-text');
          }
      } else if (count_checkbox >= 8 && count_checkbox <= 14) {
          $('#main_flag').removeClass('error-text');
          $('#main_flag').addClass('warning-text');
      } else if (count_checkbox >= 15 && count_checkbox <= 29) {
          $('#main_flag').removeClass('warning-text');
          $('#main_flag').addClass('primary-text');
      }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tema-dominante').change(function() {
      var count_individual_checkbox = $('input[name="first_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
          if ($('#first_flag').hasClass("error-text") == false) {
              $('#first_flag').removeClass('warning-text');
              $('#first_flag').addClass('error-text');
          }
      } else if (count_individual_checkbox == 1) {
          $('#first_flag').removeClass('error-text');
          $('#first_flag').addClass('warning-text');
      } else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
          $('#first_flag').removeClass('warning-text');
          $('#first_flag').addClass('primary-text');
      }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tesis-inversion').change(function() {
      var count_individual_checkbox = $('input[name="second_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
          if ($('#second_flag').hasClass("error-text") == false) {
              $('#second_flag').removeClass('warning-text');
              $('#second_flag').addClass('error-text');
          }
      } else if (count_individual_checkbox == 1) {
          $('#second_flag').removeClass('error-text');
          $('#second_flag').addClass('warning-text');
      } else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
          $('#second_flag').removeClass('warning-text');
          $('#second_flag').addClass('primary-text');
      }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.posicion-mercado').change(function() {
      var count_individual_checkbox = $('input[name="third_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
          if ($('#third_flag').hasClass("error-text") == false) {
              $('#third_flag').removeClass('warning-text');
              $('#third_flag').addClass('error-text');
          }
      } else if (count_individual_checkbox == 1) {
          $('#third_flag').removeClass('error-text');
          $('#third_flag').addClass('warning-text');
      } else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
          $('#third_flag').removeClass('warning-text');
          $('#third_flag').addClass('primary-text');
      }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.modelo-intervencion').change(function() {
      var count_individual_checkbox = $('input[name="fourth_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
          if ($('#fourth_flag').hasClass("error-text") == false) {
              $('#fourth_flag').removeClass('warning-text');
              $('#fourth_flag').addClass('error-text');
          }
      } else if (count_individual_checkbox == 1) {
          $('#fourth_flag').removeClass('error-text');
          $('#fourth_flag').addClass('warning-text');
      } else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
          $('#fourth_flag').removeClass('warning-text');
          $('#fourth_flag').addClass('primary-text');
      }
  });
  // QUINTO
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.capacidades').change(function() {
      var count_individual_checkbox = $('input[name="fifth_checkbox"]:checked').length;
      if (count_individual_checkbox == 0) {
          if ($('#fifth_flag').hasClass("error-text") == false) {
              $('#fifth_flag').removeClass('warning-text');
              $('#fifth_flag').addClass('error-text');
          }
      } else if (count_individual_checkbox == 1) {
          $('#fifth_flag').removeClass('error-text');
          $('#fifth_flag').addClass('warning-text');
      } else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
          $('#fifth_flag').removeClass('warning-text');
          $('#fifth_flag').addClass('primary-text');
      }
  });
$('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.gobierno-corporativo').change(function() {
  var count_individual_checkbox = $('input[name="sixth_checkbox"]:checked').length;
  if (count_individual_checkbox >= 0 && count_individual_checkbox <= 1) {
      if ($('#sixth_flag').hasClass("error-text") == false) {
          $('#sixth_flag').removeClass('warning-text');
          $('#sixth_flag').addClass('error-text');
      }
  } else if (count_individual_checkbox == 2) {
      $('#sixth_flag').removeClass('error-text');
      $('#sixth_flag').addClass('warning-text');
  } else if (count_individual_checkbox >= 3 && count_individual_checkbox <= 5) {
      $('#sixth_flag').removeClass('warning-text');
      $('#sixth_flag').addClass('primary-text');
  }
});
  $('#t_socio_est').change(function(){
    var peti_value = document.getElementById(this.id).value;
    console.log(peti_value);
    if (peti_value == 'SI') {
      $('.socio-est').show();
      $('.socio-est input').addClass('active');
    } else {
      $('.socio-est').hide();
      $('.socio-est input').removeClass('active');
    }
  });
  // FIN JQUERY FORM 3
  // JSON DEL FORMULARIO
  function json_form(){
    var array_form = {};
    $('.input100.entrada').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    $('select[class="select-entrada"]').each(function() {
        array_form[$(this).attr('name')] = $(this).children(":selected").text();
    });
    // Form 2
    $('.textarea-general').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    // Form 3
    $('.select-estrategic').each(function() {
      if ($(this).children(":selected").val() != 'default') {
        array_form[$(this).attr('id')] = $(this).children(":selected").text();
      }
    });
    $('.input100.estrategic').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    $('.input100.gen-valor').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    $('.input100.mec.active').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    // Inputs flags
    $('.input100.flag.active').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    $('.checkbox-flag.active').each(function() {
        array_form[$(this).attr('id')] = this.checked;
    });
    // PETI
    $('.input100.peti.active').each(function() {
        array_form[$(this).attr('name')] = $(this).val();
    });
    $('.input100.socio.active').each(function() {
        array_form[$(this).attr('id')] = $(this).val();
    });
    console.log(array_form);
  }
</script>
