<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de RYOS','index','Ryos'],
        [ 'RYOS','index','Ryos'],
    ];

    // Gestión de interesados
    $interesados = [
      ['AUTORIDADES','GOBERNACIÓN'],
      ['AUTORIDADES','ALCALDÍAS'],
      ['AUTORIDADES','MINISTERIOS'],
      ['AUTORIDADES','PROCURADURÍA'],
      ['AUTORIDADES','CORPORACIÓN REGIONAL (Ambiental)'],
      ['AUTORIDADES','AGENCIA NACIONAL DE LICENCIAS AMBIENTALES - ANLA'],
      ['AUTORIDADES','DEFENSORÍA DEL PUEBLO'],
      ['AUTORIDADES','PERSONERÍAS MUNICIPALES'],
      ['AUTORIDADES','CONCEJOS'],
      ['AUTORIDADES','AGENCIA NACIONAL DE INFRAESTRUCTURA - ANI'],
      ['AUTORIDADES','POLICÍA NACIONAL'],
      ['AUTORIDADES','POLICÍA DE CARRETERAS'],
      ['AUTORIDADES','EJÉRCITO'],
      ['AUTORIDADES','BOMBEROS'],
      ['AUTORIDADES','DEFENSA CIVIL'],
      ['AUTORIDADES','CRUZ ROJA'],
      ['AUTORIDADES','DIRECCIÓN DE IMPUESTOS Y ADUANAS NACIONALES - DIAN'],
      ['AUTORIDADES','UNIDAD DE PLANEACIÓN MINERO ENERGÉTICA - UPME'],
      ['COMUNIDADES','COMUNIDADES DE BASE'],
      ['COMUNIDADES','JUNTAS DE ACCIÓN DE COMUNAL'],
      ['COMUNIDADES','LÍDERES COMUNITARIOS'],
      ['COMUNIDADES','JUNTAS DE ACUEDUCTO VEREDAL'],
      ['COMUNIDADES','TERCEROS INTERVINIENTES'],
      ['COMUNIDADES','EMPRESAS O INDUSTRIAS VECINAS'],
      ['COLABORADORES','ÁREA LOGÍSTICA'],
      ['COLABORADORES','TRABAJADORES'],
      ['COLABORADORES','SINDICATO TRABAJADORES'],
      ['COLABORADORES','COMUNICACIONES'],
      ['COLABORADORES','GESTIÓN HUMANA'],
      ['COLABORADORES','OPERACIÓN'],
      ['COLABORADORES','MANTENIMIENTO'],
      ['COLABORADORES','GERENCIA'],
      ['COLABORADORES','MATERIAS PRIMAS'],
      ['COLABORADORES','COMPRAS'],
      ['COLABORADORES','COMERCIO EXTERIOR'],
      ['COLABORADORES','SINDICATOS'],
      ['COLABORADORES','DIRECTIVOS'],
      ['COLABORADORES','SST'],
      ['COLABORADORES','IMPUESTOS'],
      ['COLABORADORES','TESORERÍA'],
      ['COLABORADORES','CUENTAS POR PAGAR'],
      ['COLABORADORES','SEGURIDAD FÍSICA'],
      ['COLABORADORES','LEGAL'],
      ['COLABORADORES','SEGUROS'],
      ['COLABORADORES','ACTIVOS'],
      ['COLABORADORES','INVENTARIOS'],
      ['COLABORADORES','GESTIÓN INMOBILIARIA'],
      ['COLABORADORES','CALIDAD'],
      ['COLABORADORES','COMITÉS'],
      ['COLABORADORES','GERENCIA LEGAL DE SOSTENIBILIDAD'],
      ['COLABORADORES','VICEPRESIDENCIA FINANCIERA'],
      ['COLABORADORES','VICEPRESIDENCIA DE TRANSMISIÓN'],
      ['PROVEEDORES Y CONTRATISTAS','ABASTECIMIENTO'],
      ['PROVEEDORES Y CONTRATISTAS','INGENIERÍA'],
      ['PROVEEDORES Y CONTRATISTAS','PROPIETARIOS DE PREDIOS DE INTERÉS'],
      ['PROVEEDORES Y CONTRATISTAS','INMOBILIARIAS'],
      ['PROVEEDORES Y CONTRATISTAS','GESTIÓN AMBIENTAL'],
      ['OTROS','INSTITUCIONES EDUCATIVAS'],
      ['OTROS','TRANSPORTE'],
      ['OTROS','MEDIOS DE COMUNICACIÓN'],
      ['OTROS','EMPRESAS COMPETIDORAS'],
      ['OTROS','GREMIOS'],
      ['OTROS','UNIDADES PRODUCTIVAS'],
      ['OTROS','ACTORES POLÍTICOS'],
      ['OTROS','OFICINAS DE EMPLEO'],
      ['OTROS','LÍDERES RELIGIOSOS'],
      ['OTROS','ONG'],
      ['OTROS','CÁMARAS DE COMERCIO'],
      ['OTROS','INSTITUCIONES Y ENTIDADES MEDICAS / PRESTADORAS DE SALUD'],
      ['OTROS','ALIADOS COMERCIALES'],
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
                        <span style="font-size: 15px !important;" class="contact100-form-sub-title">Los campos marcados con (*) son obligatorios.</span>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Nombre Requerimiento u Oportunidad - RYOS *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB."
                                  onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB. Pueden ser de crecimiento o sostenimiento" autocomplete="off"
                                  type="text" name="t_name" placeholder="Ingrese el nombre del requerimiento u oportunidad">
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Gestor RYOS *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para libre diligenciamiento donde se indica quién es el responsable del RYOS que se registra, habitualmente es quien diligencia el formato." onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada"  autocomplete="off" type="text" name="t_gestor" placeholder="Ingrese el gestor">
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
                            <input class="input100 entrada" id="ryos-vice"  autocomplete="off" type="text" name="t_vicepresidencia" placeholder="Ingrese la Vicepresidencia / dirección">
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100">
                            <span class="label-input100">Gerencia *</span>
                            <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para libre diligenciamiento, se debe indicar la gerencia a la cual pertenece el RYOS." onclick="return false;">help_outline</i></span>
                            <input class="input100 entrada" id="ryos-ger"  autocomplete="off" type="text" name="t_gerencia" placeholder="Ingrese la gerencia">
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
                            <span class="label-input100">Subcategoría *</span>
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
                          <textarea id="ryos-necesidad" name="t_necesidad"  class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just">
                          <span class="label-input100">Justificación del valor *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Establecer la importancia de realizar el proyecto, puede fundamentarse en la respuesta a las siguientes preguntas: ¿Qué beneficios o usos tendrá la idea? ¿Por qué la organización tendría que hacerlo? ¿Qué sucede si no se hace el RYOS? ¿Por qué es mejor que lo que existe? ¿Por qué es diferente de lo que existe?" onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-just" name="t_just_val"  class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-alcance">
                          <span class="label-input100">Alcance *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para diligenciamiento donde debe describirse en qué consiste el RYOS que está registrando, siendo preciso en cuanto a lo qué se haría en el proyecto y cuáles serían los productos o servicios entregables de ser aprobado." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-alcance" name="t_alcance"  class="textarea-general materialize-textarea"></textarea>
                      </div>

                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-rest">
                          <span class="label-input100">Restricciones y exclusiones *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Campo de texto para diligenciamiento donde se deben especificar todas las restricciones (situaciones que no permitirían adelantar parcial o totalmente el proyecto) técnicas, sociales, ambientales, normativas, de tiempo entre otras que hayan sido identificadas, así mismo se incluye una descripción de qué no incluye el RYOS en su alcance, es decir qué NO se haría en el proyecto de ser aprobado." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-rest" name="t_restriccion"  class="textarea-general materialize-textarea"></textarea>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-sup">
                          <span class="label-input100">Supuestos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Factores que se consideran verdaderos, reales o ciertos sin prueba ni demostración, que garantiza el éxito del proyecto." onclick="return false;">help_outline</i></span>
                          <textarea id="ryos-sup" name="t_supuestos"  class="textarea-general materialize-textarea"></textarea>
                      </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-3" style="display:none" style="overflow-y:visible;">
                      <span class="contact100-form-sub-title">
                          ALINEAMIENTO ESTRATÉGICO
                      </span>
                      <?php for ($i=1; $i <= 3 ; $i++):?>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" style="overflow-y:visible;">
                          <span class="label-input100">Objetivo # <?=$i?></span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Objetivo # <?=$i?>" onclick="return false;">help_outline</i></span>
                          <select  id="t_objetive_<?=$i?>" name="select-estrategic" class="select-estrategic objectives">
                          </select>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-app<?=$i?>">
                          <span class="label-input100">Aplicación</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Aplicación" onclick="return false;">help_outline</i></span>
                          <input class="input100 estrategic" autocomplete="off"  id="input-<?=$i?>" type="text" name="t_application_<?=$i?>" placeholder="Ingrese la aplicación">
                      </div>
                      <?php endfor;?>
                      <span class="contact100-form-sub-title" id="gen-valor">
                          Generación de Valor
                      </span>
                      <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input" style="overflow-y:visible;">
                          <span class="label-input100" style="color:#fff">text</span>
                          <select id="t_gen_val_1" name="select-gen" class="select-estrategic"></select>
                      </div>
                      <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Aplicación</span>
                          <input class="input100 gen-valor" autocomplete="off" type="text" name="t_gen_application_1" placeholder="Ingrese la aplicación">
                      </div>
                      <!-- TI - GENERACIÓN DE VALOR -->
                      <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" style="overflow-y:visible;">
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
                          <select id="t_gen-val_3" name="select-gen" class="select-estrategic" style="overflow-y:visible;">
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
                        <input class="input100 peti"  autocomplete="off" type="text" name="t_just_peti" id="input-just-peti" placeholder="Ingrese la justificación">
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
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_1" type="checkbox" name="first_checkbox" />
=======
                                <input class="checkbox-flag checkbox-td" id="b_checkbox_1" type="checkbox" name="first_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>En la cadena energética de baja emisión</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_2" type="checkbox" name="first_checkbox" />
=======
                                <input class="checkbox-flag checkbox-td" id="b_checkbox_2" type="checkbox" name="first_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Empresa top 1 o 2 en cada mercado o potencializa la entrada a nuevas regiones</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_3" type="checkbox" name="first_checkbox" />
=======
                                <input class="checkbox-flag checkbox-td" id="b_checkbox_3" type="checkbox" name="first_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Enmarcada bajo las premisas clave de cada GEN (focos, regiones y destrezas)</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_4" type="checkbox" name="first_checkbox" />
=======
                                <input class="checkbox-flag checkbox-td" id="b_checkbox_4" type="checkbox" name="first_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
                        <input class="input100 flag" id="app5"  autocomplete="off" type="text" name="t_application_flag_1" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tesis-inversion">
                        <span class="label-input100">2. Tesis de Inversión *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="second_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_6" type="checkbox" name="second_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ti" id="b_checkbox_6" type="checkbox" name="second_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Perspectiva de dividendos creciente</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_7" type="checkbox" name="second_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ti" id="b_checkbox_7" type="checkbox" name="second_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Barreras de entrada vía altas inversiones de capital</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_8" type="checkbox" name="second_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ti" id="b_checkbox_8" type="checkbox" name="second_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Mercados regulados</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_9" type="checkbox" name="second_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ti" id="b_checkbox_9" type="checkbox" name="second_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
                        <input class="input100 flag" id="app6"  autocomplete="off" type="text" name="t_application_flag_2" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox posicion-mercado">
                        <span class="label-input100">3. Posición de Mercado *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="third_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_11" type="checkbox" name="third_checkbox" />
=======
                                <input class="checkbox-flag checkbox-pm" id="b_checkbox_11" type="checkbox" name="third_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Exposición a buenas perspectivas demográficas de largo plazo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_12" type="checkbox" name="third_checkbox" />
=======
                                <input class="checkbox-flag checkbox-pm" id="b_checkbox_12" type="checkbox" name="third_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Institucionalidad regulatoria y jurídica confiable</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_13" type="checkbox" name="third_checkbox" />
=======
                                <input class="checkbox-flag checkbox-pm" id="b_checkbox_13" type="checkbox" name="third_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
                        <input class="input100 flag" id="app7"  autocomplete="off" type="text" name="t_application_flag_3" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox modelo-intervencion">
                        <span class="label-input100">4. Modelo de Intervención *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="fourth_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_15" type="checkbox" name="fourth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-mi" id="b_checkbox_15" type="checkbox" name="fourth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Capacidad de intervenir proactivamente en la agenda de crecimiento</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_16" type="checkbox" name="fourth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-mi" id="b_checkbox_16" type="checkbox" name="fourth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Compartir estándares de sostenibilidad, inversión social y valor compartido</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_17" type="checkbox" name="fourth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-mi" id="b_checkbox_17" type="checkbox" name="fourth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
                        <input class="input100 flag" id="app8"  autocomplete="off" type="text" name="t_application_flag_4" placeholder="Ingrese la aplicación">
                    </div>
                    <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox capacidades">
                        <span class="label-input100">5. Capacidades Técnicas, Financieras y de Gestión de Riesgos Clave *</span>
                        <span class="icon-download"><i class="material-icons error-text" id="fifth_flag">flag</i></span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_19" type="checkbox" name="fifth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ct" id="b_checkbox_19" type="checkbox" name="fifth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Experiencia en regiones comparables</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_20" type="checkbox" name="fifth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ct" id="b_checkbox_20" type="checkbox" name="fifth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Acceso a tecnología y mejores prácticas gerenciales</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_21" type="checkbox" name="fifth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ct" id="b_checkbox_21" type="checkbox" name="fifth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Capacidad financiera alineada con la inversión y acceso a capital</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_22" type="checkbox" name="fifth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-ct" id="b_checkbox_22" type="checkbox" name="fifth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_24" type="checkbox" name="sixth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-gc" id="b_checkbox_24" type="checkbox" name="sixth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Socios: Acuerdos de accionistas alineados en intereses de largo plazo del Grupo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_25" type="checkbox" name="sixth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-gc" id="b_checkbox_25" type="checkbox" name="sixth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Aliados: Acuerdos de niveles de servicio, aspectos técnicos o de gestión de a través de relaciones contractuales a mediano y largo plazo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_26" type="checkbox" name="sixth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-gc" id="b_checkbox_26" type="checkbox" name="sixth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Estándares de transparencia y reputación del más alto nivel</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_27" type="checkbox" name="sixth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-gc" id="b_checkbox_27" type="checkbox" name="sixth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                <span>Identificación y manejo de conflictos de interés con otras compañías del grupo</span>
                            </label>
                        </p>
                        <p style="margin-top: 12px">
                            <label>
<<<<<<< HEAD
                                <input class="checkbox-flag" id="b_checkbox_28" type="checkbox" name="sixth_checkbox" />
=======
                                <input class="checkbox-flag checkbox-gc" id="b_checkbox_28" type="checkbox" name="sixth_checkbox" />
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
                        <input class="input100 flag" id="app10"  autocomplete="off" type="text" name="t_application_flag_6" placeholder="Ingrese la aplicación">
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
                        <input class="input100 socio" id="t_cual_soc_est"  autocomplete="off" type="text" name="" placeholder="">
                    </div>
                    <span class="socio-est contact100-form-sub-title" style="display:none">Porcentaje de un socio estratégico</span>
                    <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="Div-valor">
                        <span class="label-input100">Valor tentativo *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
                        <input class="input100 socio" autocomplete="off" type="number" id="n_tentative_val" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px">
                    </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-4" style="display:none">
                      <span class="contact100-form-sub-title">
                          VIABILIDAD FINANCIERA
                      </span>
                      <!-- CRECIMIENTO -->
                      <div class="crec-info-finaciera wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">Estimativo de ingresos anuales *</span>
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
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100" id="input-anual-default-1" autocomplete="off" type="number" readonly onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="3013.11"
                                                style="text-align:center"></div>
                                      </td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100 viabilidad-financiera" id="n_cop_anual" autocomplete="off" onkeydown="return event.keyCode !== 69" type="number" min="0.00" max="10000.00" step="0.01" value="0.00"
                                                style="text-align:center"></div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Millones USD</td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100" id="input-anual-default-2" readonly autocomplete="off" onkeydown="return event.keyCode !== 69" type="number" min="0.00" max="10000.00" step="0.01" value="1.00"
                                                style="text-align:center"></div>
                                      </td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100 viabilidad-financiera" id="n_usd_anual" autocomplete="off" onkeydown="return event.keyCode !== 69" type="number" min="0.00" max="10000.00" step="0.01" value="0.00"
                                                style="text-align:center"></div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Millones EUR</td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100" id="input-anual-default-3" readonly autocomplete="off" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.85"
                                                style="text-align:center"></div>
                                      </td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100 viabilidad-financiera" id="n_eur_anual" autocomplete="off" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00"
                                                style="text-align:center"></div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Millones GTQ</td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100" id="input-anual-default-4" readonly autocomplete="off" type="number" min="0.00" max="10000.00" step="0.01" value="7.18" style="text-align:center"></div>
                                      </td>
                                      <td>
                                          <div class="input-icons"><i class="material-icons icon">attach_money</i>
                                              <input class="input100 viabilidad-financiera" id="n_gtq_anual" autocomplete="off" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00"
                                                style="text-align:center"></div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">Ingresos anuales *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Ingresos anuales" onclick="return false;">help_outline</i></span>
                          <input class="input100 viabilidad-financiera-inputs" id="n_ingresos_anuales" autocomplete="off" type="number" readonly name="n_ingresos_anuales" value="0" placeholder="Ingresos anuales">
                      </div>
                      <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">EBITDA *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="EBITDA" onclick="return false;">help_outline</i></span>
                          <input class="input100 viabilidad-financiera-inputs" id="n_ebitda" type="number" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0" name="name" placeholder="EBITDA" autocomplete="off">
                      </div>
                      <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">Aporte a la MEGA *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan al RYOS que está registrando"
                                onclick="return false;">help_outline</i></span>
                          <select class="select-estrategic" id="t_mega">
                              <option value="default">Seleccione una opción</option>
                              <option>Baja - Aporte menor al 2% de la MEGA</option>
                              <option>Media - Aporte entre el 2% y el 5% de la MEGA</option>
                              <option>Alta - Aporte mayor al 5% de la MEGA</option>
                          </select>
                      </div>
                      <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">Estabilidad de ingresos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan el RYOS que está registrando"
                                onclick="return false;">help_outline</i></span>
                          <select class="select-estrategic" id="t_estabilidad">
                              <option value="default">Seleccione una opción</option>
                              <option>Baja - Ingresos por otros mecanismos</option>
                              <option>Media - Ingreso por vía modificación base de activos USO (Ampliaciones y compra activos USO)</option>
                              <option>Alta - Ingreso por vía de convocatorias o contratos en firme</option>
                          </select>
                      </div>
                      <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
                          <span class="label-input100">Vía de ingresos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione las características que mejor definan el RYOS que está registrando"
                                onclick="return false;">help_outline</i></span>
                          <select class="select-estrategic" id="t_ingresos">
                              <option value="default">Seleccione una opción</option>
                              <option>Ingreso por vía de convocatorias o contratos en firme</option>
                              <option>Ingreso por vía de demandas existentes en el mercado o mezcla de ingreso por contrato</option>
                              <option>Ingreso por posible demanda asociada al crecimiento del mercado</option>
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
                                          <select class="select-estrategic" id="t_tipo_beneficio_1">
                                              <option value="default">Seleccione una opción</option>
                                              <option>Tangible</option>
                                              <option>Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt1"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_1" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt2"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_1" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt3"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_1" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <select class="select-estrategic" id="t_tipo_beneficio_2">
                                              <option value="default">Seleccione una opción</option>
                                              <option class="work-option">Tangible</option>
                                              <option class="work-option">Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt4"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_2" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt5"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_2" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt6"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_2" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <select class="select-estrategic" id="t_tipo_beneficio_3">
                                              <option value="default">Seleccione una opción</option>
                                              <option class="work-option">Tangible</option>
                                              <option class="work-option">Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt7"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_3" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt8"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_3" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt9"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_3" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <select class="select-estrategic" id="t_tipo_beneficio_4">
                                              <option value="default">Seleccione una opción</option>
                                              <option class="work-option">Tangible</option>
                                              <option class="work-option">Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt10"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_4" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt11"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_4" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt12"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_4" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <select class="select-estrategic" id="t_tipo_beneficio_5">
                                              <option value="default">Seleccione una opción</option>
                                              <option class="work-option">Tangible</option>
                                              <option class="work-option">Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt13"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_5" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt14"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_5" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt15"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_5" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <select class="select-estrategic" id="t_tipo_beneficio_6">
                                              <option value="default">Seleccione una opción</option>
                                              <option class="work-option">Tangible</option>
                                              <option class="work-option">Intangible</option>
                                          </select>
                                      </td>
                                      <td id="parent-txt16"><textarea class="input300 financiera materialize-textarea" id="t_desc_beneficio_6" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt17"><textarea class="input300 financiera materialize-textarea" id="t_situacion_actual_6" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                      <td id="parent-txt18"><textarea class="input300 financiera materialize-textarea" id="t_situacion_beneficio_6" name="textarea-beneficios" style="margin-top: 6.5px"></textarea></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="wrap-input100 validate-input" data-validate="Message is required">
                          <span class="label-input100">Estimado de costos de inversión *</span>
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
                                      <td>Millones COP</td>
                                      <td id="tr_1">Millones COP</td>
                                  </tr>
                                  <tr>
                                      <td>Millones USD</td>
                                      <td id="tr_2">Millones USD</td>
                                  </tr>
                                  <tr>
                                      <td>Millones EUR</td>
                                      <td id="tr_3">Millones EUR</td>
                                  </tr>
                                  <tr>
                                      <td>Millones GTQ</td>
                                      <td id="tr_4">Millones GTQ</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-pres-total">
                          <span class="label-input100">Presupuesto total *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Presupuesto" onclick="return false;">help_outline</i></span>
                          <input class="input100 financiera" id="Pres-total" autocomplete="off" type="text" name="t_pres_total" value="0" readonly placeholder="Ingrese el presupuesto">
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-bc" style="display:none">
                          <span class="label-input100">Relación B/C *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Presupuesto" onclick="return false;">help_outline</i></span>
                          <input class="input100 financiera" id="n_relation_bc" autocomplete="off" type="number" name="n_relation_bc" value="0" placeholder="Ingrese el presupuesto">
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 " id="ciclo-input-div">
                        <span class="label-input100">Ciclo de vida del producto (años) *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Ingrese el tiempo que operará el producto que se genera por la implementación de su RYOS" onclick="return false;">help_outline</i></span>
                        <input class="input100 financiera active" type="number" id="n_ciclo_vida" name="n_ciclo_vida" autocomplete="off" value="0" onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px" placeholder="Ingrese el ciclo de vida">
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100" id="ciclo-select-div" style="display:none">
                        <span id="span-ciclo-title" class="label-input100">Ciclo de vida del producto (años) *</span>
                        <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Ingrese el tiempo que operará el producto que se genera por la implementación de su RYOS" onclick="return false;">help_outline</i></span>
                        <select class="select-estrategic" id="t_ciclo_vida" name="t_ciclo_vida">
                            <option value="default">Seleccione una opción</option>
                            <option>Mayor a 5 años</option>
                            <option>Entre 2 y 5 años</option>
                            <option>Menor a 2 años</option>
                        </select>
                      </div>
                      <span class="origen-mandatorio contact100-form-sub-title">
                          PROYECTOS DE ORIGEN MANDATORIO
                      </span>
                      <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input" id="costos-div">
                          <span class="label-input100">Costos por no ejecución *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom"
                                data-tooltip="Estime e incluya el monto económico que estima GEB tendría que desembolsar por concepto de multas, penalidades y otros, en caso de no implementar esta RYOS"
                                onclick="return false;">help_outline</i></span>
                          <input class="input100 financiera active" type="number" name="name" id="n_costos_no_ejec" placeholder="Ingrese los costos" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" autocomplete="off"
                                 onkeydown="return event.keyCode !== 69" style="margin-bottom: 20px">
                      </div>
                      <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input" id="parent-txt19">
                          <span class="label-input100">Consecuencia sin RYOS *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Relacione todas las consecuencias identificadas en las cuales incurriría GEB en caso de no ejecutar el RYOS"
                                onclick="return false;">help_outline</i></span>
                          <textarea class="input300 financiera materialize-textarea active" name="t_consecuencia" id="t_consecuencia" placeholder="Ingrese la consecuencia" style="margin-top: 1px"></textarea>
                      </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-5" style="display:none">
                      <span class="contact100-form-sub-title">
                          ATRACTIVIDAD TÉCNICA
                      </span>
                      <!-- CO -->
                      <div class="comp-co wrap-input100 rs1-wrap-input100">
                          <span class="label-input100">Criticidad en la operación *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_criticidad_co" name="t_criticidad_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option>No afecta la continuidad operacional</option>
                              <option>Afectación menor a la continuidad operacional</option>
                              <option>Afectación mayor a la continuidad operacional</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Cambio tecnológico *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_cambio_co" name="t_cambio_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No hay cambio de tecnología en el activo o sus componentes</option>
                              <option class="work-option">Uno o más componentes / activo cambia a conocida en GEB</option>
                              <option class="work-option">Uno o más componentes cambia a conocida en GEB</option>
                              <option class="work-option">Uno o más componentes cambia a desconocida en GEB</option>
                              <option class="work-option">Uno o más componentes / activo cambia a desconocida en GEB</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Disponibilidad de los activos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_activos_co" name="t_activos_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No hay cambio en la disponibilidad en el activo o sus componentes</option>
                              <option class="work-option">Reduce frecuencia de paradas no programadas sin modificar tiempo de paradas programadas</option>
                              <option class="work-option">Reduce tiempo de paradas programadas pero no modifica frecuencia de paradas no programadas</option>
                              <option class="work-option">Reduce tiempo de paradas programadas y frecuencia de paradas no programadas</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Vida útil del activo *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_vida_util_co" name="t_vida_util_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No hay cambio en la vida útil del activo o sus componentes</option>
                              <option class="work-option">No aumenta la vida útil del activo pero si de sus componentes</option>
                              <option class="work-option">Aumenta la vida útil del activo y de sus componentes</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Esquema de mantenimiento *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_esquema_co" name="t_esquema_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No hay cambio en el esquema de mantenimiento del activo o sus componentes</option>
                              <option class="work-option">Reduce frecuencia de paradas programadas sin modificar tiempo de intervención</option>
                              <option class="work-option">Reduce tiempo de paradas programadas sin modificar su frecuencia</option>
                              <option class="work-option">La intervención permite reducir el tiempo de las paradas programadas y su frecuencia</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB) *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_sinergia_co" name="t_sinergia_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option>NO</option>
                              <option>SI</option>
                          </select>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-cual-co" style="display:none">
                          <span class="label-input100">¿Cuál (es)? *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
                          <input class="input100 form5" id="t_cual_co" autocomplete="off" type="text" name="t_cual_co" placeholder="">
                      </div>
                      <!-- TI -->
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Tipo de proyecto de TI *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_project_type_ti" name="t_project_type_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option>Soluciones tecnológicas</option>
                              <option>Servicios de arquitectura e innovación en TI</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Criticidad en la operación *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_crit_op_ti" name="t_crit_op_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No afecta la continuidad operacional</option>
                              <option class="work-option">Afectación menor a la continuidad operacional</option>
                              <option class="work-option">Afectación mayor a la continuidad operacional</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">¿Se instalará tecnología? *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_inst_tec_ti" name="t_inst_tec_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">SI</option>
                              <option class="work-option">NO</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Cuadrante de Gartner *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_gartner_ti" name="t_gartner_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">Retadores - Challengers</option>
                              <option class="work-option">Líderes - Leaders</option>
                              <option class="work-option">Jugadores de Nicho - Niche players</option>
                              <option class="work-option">Visionarios - Visionaries</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Estado de la tecnología *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_estado_tec_ti" name="t_estado_tec_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                              <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                              <option class="work-option">Nueva en el mundo</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB) *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_sinergia_ti" name="t_sinergia_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="sinergia-ti-option">NO</option>
                              <option class="sinergia-ti-option">SI</option>
                          </select>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual-ti">
                          <span class="label-input100">¿Cuál (es)? *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
                          <input class="input100 form5" id="t_cual_ti" autocomplete="off" type="text" name="t_cual_ti" placeholder="">
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Complejidad del proyecto *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_complejidad_ti" name="t_complejidad_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="complejidad-ti-option">Alta</option>
                              <option class="complejidad-ti-option">Media</option>
                              <option class="complejidad-ti-option">Baja</option>
                          </select>
                          <span id="complejidad-ti-span"></span>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Impacto sobre la empresa *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_impacto_emp_ti" name="t_impacto_emp_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                              <option class="work-option">Positivo. Genera el beneficio previsto</option>
                              <option class="work-option">Neutral. No genera ningún beneficio</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Impacto sobre GEB *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_impacto_geb_ti" name="t_impacto_geb_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                              <option class="work-option">Positivo. Genera el beneficio previsto</option>
                              <option class="work-option">Neutral. No genera ningún beneficio</option>
                          </select>
                      </div>
                      <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Resistencia al cambio *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_resistencia_ti" name="t_resistencia_ti" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="resistencia-ti-option">Alta</option>
                              <option class="resistencia-ti-option">Media</option>
                              <option class="resistencia-ti-option">Baja</option>
                          </select>
                          <span id="span-resistencia-ti"></span>
                      </div>
                      <!-- AC -->
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Restricciones regulatorias *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_restricciones_ac" name="t_restricciones_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="restricciones-reg-option" value="no">No se requieren trámites</option>
                              <option class="restricciones-reg-option" value="algunos">Se requieren algunos trámites</option>
                              <option class="restricciones-reg-option" value="si">Se requieren trámites</option>
                          </select>
                          <span id="span-restricciones-reg"></span>
                      </div>
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Criticidad en la operación *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_criticidad_ac" name="t_criticidad_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">No afecta la continuidad operacional</option>
                              <option class="work-option">Afectación menor a la continuidad operacional</option>
                              <option class="work-option">Afectación mayor a la continuidad operacional</option>
                          </select>
                      </div>
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Disponibilidad de los recursos *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_disponibilidad_ac" name="t_disponibilidad_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="disponibilidad-option">Alta</option>
                              <option class="disponibilidad-option">Media</option>
                              <option class="disponibilidad-option">Baja</option>
                          </select>
                          <span id="disponibilidad-span"></span>
                      </div>
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB) *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_sinergia_ac" name="t_sinergia_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">NO</option>
                              <option class="work-option">SI</option>
                          </select>
                      </div>
                      <div class="wrap-input100 rs1-wrap-input100 validate-input" style="display:none" id="div-cual-ac">
                          <span class="label-input100">¿Cuál (es)? *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="¿Cuál (es)?" onclick="return false;">help_outline</i></span>
                          <input class="input100 form5" id="t_cual_ac" autocomplete="off" type="text" name="t_cual_ac" placeholder="">
                      </div>
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Impacto en SST *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_impacto_sst_ac" name="t_impacto_sst_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="impacto-sst-option">Alto</option>
                              <option class="impacto-sst-option">Medio</option>
                              <option class="impacto-sst-option">Bajo</option>
                          </select>
                          <span id="impacto-sst-info-span"></span>
                      </div>
                      <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Sinergia con estrategias de gestión humana *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                          <select id="t_sinergia_gh_ac" name="t_sinergia_gh_ac" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="sinergia-option">Alta</option>
                              <option class="sinergia-option">Media</option>
                              <option class="sinergia-option">Baja</option>
                          </select>
                          <span id="sinergia-span"></span>
                      </div>
                      <!-- CRECIMIENTO -->
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Interconexión (Mercados entre) *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccione la interconexión" onclick="return false;">help_outline</i></span>
                          <select id="t_interconexion_crec" name="t_interconexion_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="interconexion-option" value="FE">Fuentes energéticas</option>
                              <option class="interconexion-option" value="FE-GU">Fuentes energéticas y grandes usuarios</option>
                              <option class="interconexion-option" value="FE-CP">Fuentes energéticas y ciudades pequeñas</option>
                          </select>
                          <span id="interconexion-span"></span><br />
                      </div>
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Tecnología a instalar *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija en el desplegable el nivel de conocimiento en el mundo y GEB de la tecnología vinculada con el RYOS en registro"
                                onclick="return false;">help_outline</i></span>
                          <select id="t_tec_inst_crec" name="t_tec_inst_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                              <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                              <option class="work-option">Nueva en el mundo</option>
                          </select>
                      </div>
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Complejidad del proyecto *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando"
                                onclick="return false;">help_outline</i></span>
                          <select id="t_complejidad_crec" name="t_complejidad_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="complejidad-crec-option">Alta</option>
                              <option class="complejidad-crec-option">Media</option>
                              <option class="complejidad-crec-option">Baja</option>
                          </select>
                          <span id="complejidad-crec-span-1"></span><br />
                          <span id="complejidad-crec-span-2"></span><br />
                          <span id="complejidad-crec-span-3"></span><br />
                          <span id="complejidad-crec-span-4"></span>
                      </div>
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Gestión social *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando"
                                onclick="return false;">help_outline</i></span>
                          <select id="t_gestion_soc_crec" name="t_gestion_soc_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="social-option">Bajo</option>
                              <option class="social-option">Medio</option>
                              <option class="social-option">Alto</option>
                          </select>
                          <span id="social-span"></span>
                      </div>
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Gestión ambiental *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando"
                                onclick="return false;">help_outline</i></span>
                          <select id="t_gestion_amb_crec" name="t_gestion_amb_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="gestion-ambiental-option">Bajo</option>
                              <option class="gestion-ambiental-option">Medio</option>
                              <option class="gestion-ambiental-option">Alto</option>
                          </select>
                          <span id="gestion-ambiental-span"></span>
                      </div>
                      <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Sinergia con otros proyectos o activos propios *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Elija el nivel de complejidad del proyecto en función de las características del RYOS que esta registrando"
                                onclick="return false;">help_outline</i></span>
                          <select id="t_sinergia_crec" name="t_sinergia_crec" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="sinergia-crec-option">Alta</option>
                              <option class="sinergia-crec-option">Media</option>
                              <option class="sinergia-crec-option">Baja</option>
                          </select>
                          <span id="sinergia-crec-span"></span>
                      </div>
                    </form>
                    <form class="contact100-form validate-form" id="Form-6" style="display:none">
                      <!-- CO -->
                      <span class="comp-co contact100-form-sub-title">
                          ASPECTOS COMPLEMENTARIOS
                      </span>
                      <span class="comp-co contact100-form-sub-title">
                          <small>AMBIENTAL</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_ambiental_comp_co" name="t_ambiental_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_ambiental_int_co" name="t_ambiental_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <span class="comp-co contact100-form-sub-title">
                          <small>SOCIAL</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_social_comp_co" name="t_social_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_social_int_co" name="t_social_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <span class="comp-co contact100-form-sub-title">
                          <small>SST</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_sst_comp_co" name="t_sst_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_sst_int_co" name="t_sst_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <span class="comp-co contact100-form-sub-title">
                          <small>DE SEGURIDAD FÍSICA</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_seguridad_comp_co" name="t_seguridad_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_seguridad_int_co" name="t_seguridad_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <span class="comp-co contact100-form-sub-title">
                          <small>TIERRAS / PREDIAL</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_predial_comp_co" name="t_predial_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_predial_int_co" name="t_predial_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <span class="comp-co contact100-form-sub-title">
                          <small>JURÍDICA Y REGULATORIA</small>
                      </span>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Componente *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                          <select id="t_juridica_comp_co" name="t_juridica_comp_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
                              <option class="work-option" id="option-elect">SI</option>
                              <option class="work-option" id="option-gas">NO</option>
                          </select>
                      </div>
                      <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <span class="label-input100">Interacción *</span>
                          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                          <select id="t_juridica_int_co" name="t_juridica_int_co" class="select-estrategic">
                              <option disabled selected value="default">Seleccione una opción</option>
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
                                  <table id="risk-table">
                                      <tr>
                                          <th class="btn-space" id="space-1"><a class="event btn-floating btn-large title modal-trigger red" id="risk_1" data-number="1" href="#detailBtnRisks1" draggable="true">R1</a></th>
                                          <th class="btn-space" id="space-2"><a class="event btn-floating btn-large title modal-trigger red" href="#detailBtnRisks2" id="risk_2" data-number="2" draggable="true">R2</a></th>
                                          <th></th>
                                          <th class="title" rowspan="5">
                                              <h3 class="vert">Probabilidad</h3>
                                          </th>
                                          <th>MA</th>
                                          <td class="yellow" data-prob="Muy alta" data-impact="Muy bajo" style="width: 20%">
                                          </td>
                                          <td class="yellow" data-prob="Muy alta" data-impact="Bajo" style="width: 20%">
                                          </td>
                                          <td class="orange" data-prob="Muy alta" data-impact="Medio" style="width: 20%">
                                          </td>
                                          <td class="red" data-prob="Muy alta" data-impact="Alto" style="width: 20%" style="width: 20%">
                                          </td>
                                          <td class="red" data-prob="Muy alta" data-impact="Muy alto" style="width: 20%">
                                          </td>
                                      </tr>
                                      <tr>
                                          <th class="btn-space" id="space-3"><a class="event btn-floating btn-large title modal-trigger red" id="risk_3" data-number="3" href="#detailBtnRisks3" draggable="true">R3</a></th>
                                          <th class="btn-space" id="space-4"><a class="event btn-floating btn-large title modal-trigger red" id="risk_4" data-number="4" href="#detailBtnRisks4" draggable="true">R4</a></th>
                                          <th></th>
                                          <th>A</th>
                                          <td class="yellow" data-prob="Alta" data-impact="Muy bajo">
                                          </td>
                                          <td class="yellow" data-prob="Alta" data-impact="Bajo">
                                          </td>
                                          <td class="orange" data-prob="Alta" data-impact="Medio">
                                          </td>
                                          <td class="orange" data-prob="Alta" data-impact="Alto">
                                          </td>
                                          <td class="red" data-prob="Alta" data-impact="Muy alto">
                                          </td>
                                      </tr>
                                      <tr>
                                          <th class="btn-space" id="space-5"><a class="event btn-floating btn-large title modal-trigger red" id="risk_5" data-number="5" href="#detailBtnRisks5" draggable="true">R5</a></th>
                                          <th class="btn-space" id="space-6"><a class="event btn-floating btn-large title modal-trigger red" id="risk_6" data-number="6" href="#detailBtnRisks6" draggable="true">R6</a></th>
                                          <th></th>
                                          <th>M</th>
                                          <td class="lime accent-4" data-prob="Media" data-impact="Muy bajo">
                                          </td>
                                          <td class="yellow" data-prob="Media" data-impact="Bajo">
                                          </td>
                                          <td class="yellow" data-prob="Media" data-impact="Medio">
                                          </td>
                                          <td class="orange" data-prob="Media" data-impact="Alto">
                                          </td>
                                          <td class="orange" data-prob="Media" data-impact="Muy alto">
                                          </td>
                                      </tr>
                                      <tr>
                                          <th class="btn-space" id="space-7"><a class="event btn-floating btn-large title modal-trigger red" id="risk_7" data-number="7" href="#detailBtnRisks7" draggable="true">R7</a></th>
                                          <th class="btn-space" id="space-8"><a class="event btn-floating btn-large title modal-trigger red" id="risk_8" data-number="8" href="#detailBtnRisks8" draggable="true">R8</a></th>
                                          <th></th>
                                          <th>B</th>
                                          <td class="lime accent-4" data-prob="Baja" data-impact="Muy bajo">
                                          </td>
                                          <td class="lime accent-4" data-prob="Baja" data-impact="Bajo">
                                          </td>
                                          <td class="yellow" data-prob="Baja" data-impact="Medio">
                                          </td>
                                          <td class="yellow" data-prob="Baja" data-impact="Alto">
                                          </td>
                                          <td class="yellow" data-prob="Baja" data-impact="Muy alto">
                                          </td>
                                      </tr>
                                      <tr>
                                          <th class="btn-space" id="space-9"><a class="event btn-floating btn-large title modal-trigger red" id="risk_9" data-number="9" href="#detailBtnRisks9" draggable="true">R9</a></th>
                                          <th class="btn-space" id="space-10"></th>
                                          <th></th>
                                          <th>MB</th>
                                          <td class="lime accent-4" data-prob="Muy baja" data-impact="Muy bajo">
                                          </td>
                                          <td class="lime accent-4" data-prob="Muy baja" data-impact="Bajo">
                                          </td>
                                          <td class="lime accent-4" data-prob="Muy baja" data-impact="Medio">
                                          </td>
                                          <td class="lime accent-4" data-prob="Muy baja" data-impact="Alto">
                                          </td>
                                          <td class="yellow" data-prob="Muy baja" data-impact="Muy alto">
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
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Nivel de riesgos estimado por el gestor ryos *</span>
                              <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="" onclick="return false;">help_outline</i></span>
                              <select id="t_risk_lvl" class="select-estrategic">
                                  <option disabled selected value="default">Seleccione una opción</option>
                                  <option>Extremo</option>
                                  <option>Muy alto</option>
                                  <option>Alto</option>
                                  <option>Medio</option>
                                  <option>Bajo</option>
                                  <option>Muy bajo</option>
                              </select>
                          </div>
                      </div>
                      <div class="wrap-input100 validate-input">
                          <span class="contact100-form-sub-title">
                              GESTIÓN DE INTERESADOS
                          </span>
                          <table class="display highlight centered" id="table-gi">
                              <thead>
                                  <tr>
                                      <th>Interesados</th>
                                      <th>¿Qué pasa si no me comunico con él y no lo gestiono?</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="wrap-input100 rs1-wrap-input100">
                                      <td><input id="t_interesado_1" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                      <td><input id="t_gi_question_1" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                  </tr>
                                  <tr class="wrap-input100 rs1-wrap-input100">
                                      <td><input id="t_interesado_2" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                      <td><input id="t_gi_question_2" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                  </tr>
                                  <tr class="wrap-input100 rs1-wrap-input100">
                                      <td><input id="t_interesado_3" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                      <td><input id="t_gi_question_3" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                  </tr>
                                  <tr class="wrap-input100 rs1-wrap-input100">
                                      <td><input id="t_interesado_4" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                      <td><input id="t_gi_question_4" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                  </tr>
                                  <tr class="wrap-input100 rs1-wrap-input100">
                                      <td><input id="t_interesado_5" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                      <td><input id="t_gi_question_5" name="input_gi" class="input100" type="text" style="text-align:center"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <div class="mt-4">
                            <a class="modal-trigger tertiary-text" href="#detailGI">Ejemplo de algunos interesados (clic sobre este texto), recuerde dejar los 5 más relevantes en esta tabla.</a>
                          </div>
                      </div>
                      <div class="container-contact100-form-btn mb-6">
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
<?php for ($i= 1; $i < 10; $i++):?>
  <div id="detailBtnRisks<?=$i?>" data-modal="<?=$i?>" class="modal">
   <div class="modal-content">
     <a class="modal-close close">
       <i class="material-icons">close</i>
     </a>
     <h2>RIESGOS ESPECÍFICOS RELEVANTES IDENTIFICADOS POR EL GESTOR DEL RYOS</h2>
       <span class="label-input100">RIESGO</span>
       <div class="input100">
        <textarea id="t_risk_<?=$i?>" class="risks-input materialize-textarea"></textarea>
       </div>
       <form class="contact100-form pt-6">
       <div class="wrap-input100 rs1-wrap-input100">
           <span class="label-input100">Probabilidad</span>
           <select id="prob-select-<?=$i?>" name="risk-coord-<?=$i?>">
               <option value="default" selected>Seleccione una opción</option>
               <option>Muy alta</option>
               <option>Alta</option>
               <option>Media</option>
               <option>Baja</option>
               <option>Muy baja</option>
           </select>
       </div>
       <div class="wrap-input100 rs1-wrap-input100">
           <span class="label-input100">Impacto</span>
           <select id="impact-select-<?=$i?>" name="risk-coord-<?=$i?>">
               <option value="default" selected>Seleccione una opción</option>
               <option>Muy alto</option>
               <option>Alto</option>
               <option>Medio</option>
               <option>Bajo</option>
               <option>Muy bajo</option>
           </select>
       </div>
     </form>
      </div>
      <div class="modal-footer">
          <a class="modal-reset modal-close waves-effect error btn btn-depressed">Cancelar</a>
          <a class="modal-change modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
     </div>
<?php endfor;?>
<div id="detailGI" data-modal="1" class="modal">
 <div class="modal-content">
   <a class="modal-close close">
     <i class="material-icons">close</i>
   </a>
   <h2>RIESGOS ESPECÍFICOS RELEVANTES IDENTIFICADOS POR EL GESTOR DEL RYOS</h2>
   <table class="display highlight centered" id="gestion-interesados">
       <thead>
           <tr>
               <th>Categoría</th>
               <th>Subgrupo</th>
               <th>Copiar</th>
           </tr>
       </thead>
       <tbody>
         <?php foreach ($interesados as $item): ?>
           <tr class="wrap-input100 rs1-wrap-input100">
               <td><?=$item[0]?></td>
               <td><?=$item[1]?></td>
               <td style="cursor: pointer;"><i class="copy-gi material-icons">content_copy</i></td>
           </tr>
        <?php endforeach;?>
       </tbody>
   </table>
  </div>
  <div class="modal-footer">
    <a class="modal-reset modal-close waves-effect error btn btn-depressed">Cancelar</a>
    <a class="modal-change modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
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
          BtnReturnHide(Form_Numbers);
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
          Form_Numbers = $('.contact100-form.validate-form.active').index();
          BtnNextHide(Form_Numbers + 1);
          visible_form();
      });
      $("#main-btn").click(function() {
        if ($('#Form-6').is(":visible")) {
          var select_lenght = 0, select_active = 0;
          $('#Form-6 select').each(function() {
            if ($(this).parent().parent().attr('style') != 'display: none;') {
              select_lenght += $(this).length;
              if ($(this).children(":selected").val() != 'default') {
                select_active += $(this).length;
              }
            }
          });
          var empty_input = $('[name="input_gi"]').filter(function(){
              return $(this).val()
          }).length;
          console.log(empty_input);
          if (empty_input >0 && empty_input % 2 == 0) {
            if (select_lenght == select_active && select_lenght != 0) {
                validate_form5();
            } else if (select_lenght == 0 && select_active == 0) {
                validate_form5();
            }
            else {
                alert_notification('Por favor revisar, campos obligatorios.');
            }
          } else {
                alert_notification('Por favor revisar, campos vacíos.');
          }
        }
          json_form();
      });
  });
  function validate_form5(){
    var empty_inputs = null, inputs_empty = 0, cont_elements = 0;
    $.each($('#risk-table td a'), function(i){
      cont_elements += $(this).length;

      var modal_id = $(this).attr('href').split('#')[1];
      empty_inputs = $('#'+modal_id+' textarea').filter(function() {
          return $(this).val()
      }).length;
      inputs_empty += empty_inputs;
    });
    if (cont_elements != 0 && inputs_empty == cont_elements) {
      json_form();
    } else {
      alert_notification('Por favor favor revisar, campos vacíos.');
    }
    console.log('elementos '+cont_elements+' vacíos '+inputs_empty);
  }
 function next_module(empty_inputs) {
     // alert('empty '+empty_inputs);
     if (empty_inputs == 0) {
       if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length - 1) {
           $('.contact100-form.validate-form.active').hide();
           $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
       }
       $('#return').show();
       $('body,html').animate({
           scrollTop: 0
       }, 500);
     } else {
       alert_notification('Por favor favor revisar, campos vacíos .');
     }
 }
  // FUNCIÓN QUE OCULTA EL BÓTON DE REGRESAR CUANDO SE ENCUENTRA EN EL FORMULARIO 1
  function BtnNextHide(Form_Numbers) {
      if (Form_Numbers == 5) {
          $("#next").hide();
      } else {
          $("#return").show();
          $("#next").show();
      }
  }
  function BtnReturnHide(Form_Numbers) {
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
    var cont_sel = 0;
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
        console.log('form 1 '+empty_inputs);
    }
    if ($('#Form-2').is(":visible")) {
        estrategic_objectives(filial_value);
        gen_value(subcategory_value);
        var empty_inputs = $('.textarea-general').filter(function() {
            return !$(this).val()
        }).length;
        console.log('form 2 '+empty_inputs);
    }
    if ($('#Form-3').is(":visible")) {
        estimate_cost();
        ciclo_and_bc(subcategory_value);
        /* Alineamiento estratégico
           Inputs
        */
        var empty_inputs1 = $('.input100.estrategic').filter(function() {
            return $(this).val()
        }).length;
        // Selects
        var array_obj = [];
        $('.select-estrategic.objectives').each(function(i){
            if ($(this).children(":selected").val() != 'default') {
                array_obj.push($(this).children(":selected").val());
            }
            let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
            console.log(findDuplicates(array_obj));
            if (findDuplicates(array_obj).length == 0) {
              if ($(this).children(":selected").val() != 'default') {
                return cont_sel++;
              }
            } else {
              alert_notification('Objetivos estratégicos repetidos.');
            }
        });
        console.log(empty_inputs1+' '+cont_sel+' '+cont_sel);
        if (empty_inputs1 == cont_sel && cont_sel > 0) {
            empty_inputs1 = 0;
        } else {
          alert_notification('Alineamiento estratégico vacío.');
        }
        // Generación de valor
        var cont_gen = 0;
        var empty_inputs2 = $('.input100.gen-valor').filter(function() {
            return $(this).val()
        }).length;
        $('[name="select-gen"]').each(function(){
            if ($(this).children(":selected").val() != 'default') {
              return cont_gen++;
            }
        });
        console.log('GEN '+empty_inputs2+' '+cont_gen);
        if (empty_inputs2 == cont_gen && cont_gen > 0) {
            empty_inputs2 = 0;
        }else {
            alert_notification('Generación de valor vacío.');
            empty_inputs2 = onkeyup = 1;
        }
        // MEC
        var cont_mec = 0;
        var empty_inputs3 = 1;
        if ($('.input100.mec').hasClass('active') && $('.input100.mec').is(":visible")) {
          empty_inputs3 = $('.input100.mec.active').filter(function() {
              return $(this).val()
          }).length;
          $('#t_mec').each(function(){
              if ($(this).children(":selected").val() != 'default') {
                return cont_mec++;
              }
          });
        }
        console.log('MEC '+$('.input100.mec').is(":visible"));
        if (empty_inputs3 == cont_mec && cont_mec > 0) {
            empty_inputs3 = 0;
        } else if (empty_inputs3 == 1) {
            empty_inputs3 = 0;
        }
        else {
          alert_notification('¿Está en el MEC?, campo vacío.');
        }
        // Flags
        var cont_flags_1 = 0, cont_flags_2 = 0, cont_flags_3 = 0, cont_flags_4 = 0, cont_flags_5 = 0, cont_flags_6 = 0, empty_test = 0;
        var empty_inputs4 = $('.input100.flag.active').filter(function() {
            return !$(this).val()
        }).length;
        if ($('input[name="first_checkbox"]').hasClass('checkbox-flag active')) {
          $('input[name="first_checkbox"]:checked').each(function() {
              return cont_flags_1++
          });
          $('input[name="second_checkbox"]:checked').each(function() {
              return cont_flags_2++
          });
          $('input[name="third_checkbox"]:checked').each(function() {
              return cont_flags_3++
          });
          $('input[name="fourth_checkbox"]:checked').each(function() {
              return cont_flags_4++
          });
          $('input[name="fifth_checkbox"]:checked').each(function() {
              return cont_flags_5++
          });
          $('input[name="sixth_checkbox"]:checked').each(function() {
              return cont_flags_6++
          });
        }
        if (empty_inputs4 != 0) {
            alert_notification('Alineamiento Estratégico (Fit Estratégico), campo(s) vacíos.');
        }
        var empty_inputs5 = $('.input100.socio.active').filter(function() {
            return !$(this).val()
        }).length;
        console.log(empty_inputs1 +' '+empty_inputs2 +' '+empty_inputs3 +' '+empty_inputs4 +' '+empty_inputs5);
        empty_inputs = (empty_inputs1 + empty_inputs2 + empty_inputs3 + empty_inputs4 + empty_inputs5);
    }
    if ($('#Form-4').is(":visible")) {
        var empty_inputs1 = $('.input100.viabilidad-financiera.active').filter(function() {
            return !$(this).val()
        }).length;
        var empty_inputs2 = $('.input100.viabilidad-financiera-inputs.active').filter(function() {
<<<<<<< HEAD
            return !$(this).val()
        }).length;
=======
          // if ($('.input100.viabilidad-financiera-inputs.active').val() != "0") {
          financialInputs();
          return !$(this).val()
        }).length;
        // console.log('input 2 '+empty_inputs2);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        var array_select = [], empty_inputs3 = 1;
        for (var i = 1; i <= 6; i++) {
          if ($('#t_tipo_beneficio_'+[i]).children(":selected").val() != 'default') {
              var empty_inputs_db = $('#t_desc_beneficio_'+[i]).filter(function() {
                  return !$(this).val()
              }).length;
              var empty_inputs_sa = $('#t_situacion_actual_'+[i]).filter(function() {
                  return !$(this).val()
              }).length;
              var empty_inputs_sb = $('#t_situacion_beneficio_'+[i]).filter(function() {
                  return !$(this).val()
              }).length;
              if (empty_inputs_db == 0 && empty_inputs_sa == 0 && empty_inputs_sb == 0) {
                empty_inputs3 = 0;
              } else {
                  alert_notification('Por favor revisar campos vacíos beneficios.');
              }
<<<<<<< HEAD
              console.log(empty_inputs_db+' '+empty_inputs_sa+' '+empty_inputs_sb);
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          } else {
            array_select.push([i]);
            if (array_select.length > 5) {
                alert_notification('Debe ingresar al menos 1 beneficio.');
            }
          }
        }
        var empty_inputs4 = $('.input100.financiera.inv-estimate').filter(function() {
            return !$(this).val()
        }).length;
        var empty_inputs5 = $('#Pres-total').filter(function() {
            return !$(this).val()
        }).length;
        var empty_inputs6 = $('.input100.financiera.active').filter(function() {
            return !$(this).val()
        }).length;
        var empty_inputs7 = $('.input300.financiera.materialize-textarea.active').filter(function() {
            return !$(this).val()
        }).length;
        empty_inputs = (empty_inputs1 + empty_inputs2 + empty_inputs3 + empty_inputs4 + empty_inputs5 + empty_inputs6 + empty_inputs7);
        console.log('form 4: '+empty_inputs);
    }
    if ($('#Form-5').is(":visible")) {
      var select_lenght = 0, select_active = 0;
      $('#Form-5 select').each(function() {
        if ($(this).parent().parent().attr('style') != 'display: none;') {
          select_lenght += $(this).length;
          if ($(this).children(":selected").val() != 'default') {
            select_active += $(this).length;
          }
        }
      });
      if (select_lenght == select_active) {
        var empty_inputs = $('select:visible').filter(function() {
          return !$(this).val()
        }).length;
      } else {
        alert_notification('Por favor revisar, campos obligatorios.');
      }
      console.log('select '+select_lenght+' '+'select active '+select_active);
      // console.log('Form 5: '+empty_inputs);
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
                  alert_notification(error_text);
              }
          } else {
              error_text = 'Por favor revisar, campos vacíos.'
              alert_notification(error_text);
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
            alert_notification('Error al enviar RYOS');
          }
          setTimeout(function() {
              $('#div-notify').removeClass('bottom-right do-show').addClass('bar-top')
          }, 4000);
      }
  }
  $('#select-origen').change(function(){
    var mandatorio_val = document.getElementById(this.id).value, proj_mandandatorios = $('.origen-mandatorio');
    if (mandatorio_val == 'SI') {
      proj_mandandatorios.show();
      $('#n_costos_no_ejec').addClass('active');
      $('#t_consecuencia').addClass('materialize-textarea active');
    } else {
      proj_mandandatorios.hide();
      $('#n_costos_no_ejec').removeClass('active');
      $('#t_consecuencia').removeClass('materialize-textarea active');
    }
  });
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
      case 'EEBIS':
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
    }
    // REGRESAR LOS SELECT DE ALINEAMIENTO ESTRATÉGICOS A LA PRIMERA POSICIÓN
    var estrategic_select = $('.select-estrategic');
    estrategic_select.prop('selectedIndex', 0); //Sets the first option as selected
    estrategic_select.formSelect();
    gen_val_append(array_gen_val);
  }
  function gen_val_append(array_gen_val) {
      $('#t_gen_val_1 option').remove();
      $('#t_gen_val_1').append(new Option('Seleccione una opción', 'default'));
      $.each(array_gen_val, function() {
          $('#t_gen_val_1').append(new Option(this));
          $('#t_gen_val_1').formSelect();
      });
  }
  // CAMPOS DE MEC Y BANDERAS (SOLO CRECIMIENTO)
  function show_mec(project_type, subcategory){
<<<<<<< HEAD
=======
    $('#t_risk_1').val("");
    $('#t_risk_2').val("");
    $('#t_risk_3').val("");
    $('#t_risk_4').val("");
    $('#t_risk_5').val("");
    $('#t_risk_6').val("");
    $('#t_risk_7').val("");
    $('#t_risk_8').val("");
    $('#t_risk_9').val("");
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
        // form 4
        $('.crec-info-finaciera').show();
        $('.input100.viabilidad-financiera').addClass('active');
        $('.input100.viabilidad-financiera-inputs').addClass('active');
<<<<<<< HEAD
=======
        // form 5 risks
        $('#t_risk_1').val("Incumplimiento FOPO");
        $('#t_risk_2').val("Técnico: Tramo Subterráneo / Subfluvial; Nueva Tecnología");
        $('#t_risk_3').val("Sociopolítico: Consulta Previa/Oposición");
        $('#t_risk_4').val("Ambiental: Áreas protejidas - Cruces>2.800mts (paramos)");
        $('#t_risk_5').val("Arqueología - Zonas con potenciales hallazgos arqueológicos");
        $('#t_risk_6').val("Gestión Predial: (Cambios POT, servidumbres,  Restitución de tierras)");
        $('#t_risk_7').val("Seguridad - Complejo Orden Público");
        $('#t_risk_8').val("Potencial retiro de oferta por parte de la UPME del PIE");
        $('#t_risk_9').val("SST - Potenciales accidentes mortales por entorno de zona");
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      } else {
        $('#div-peti').show();
        $('#div-just-peti').show();
        $('#div-socio-est').hide();
        $('.crec-flags').hide();
        $('.crec-info-finaciera').hide();
        $('#input-just-peti').addClass('active');
        $('.input100.flag.active').removeClass('active');
        $('.checkbox-flag.active').removeClass('active');
        $('.input100.viabilidad-financiera.active').removeClass('active');
        $('.input100.viabilidad-financiera-inputs.active').removeClass('active');
      }
    } else {
      $('.mec-exclusive').hide();
      $('.input100.mec.active').removeClass('active');
      $('.crec-flags').hide();
      $('.crec-info-finaciera').hide();
      $('.input100.flag.active').removeClass('active');
      $('.checkbox-flag.active').removeClass('active');
      $('.input100.viabilidad-financiera.active').removeClass('active');
      $('.input100.viabilidad-financiera-inputs.active').removeClass('active');
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
    if (peti_value == 'SI') {
      $('.socio-est').show();
      $('.socio-est input').addClass('active');
    } else {
      $('.socio-est').hide();
      $('.socio-est input').removeClass('active');
    }
  });
<<<<<<< HEAD
=======
  $('input[name="first_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_5") {
        $('.checkbox-td').prop('checked', false);
      } else {
        $('#b_checkbox_5').prop('checked', false);
      }
    }
  });
  $('input[name="second_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_10") {
        $('.checkbox-ti').prop('checked', false);
      } else {
        $('#b_checkbox_10').prop('checked', false);
      }
    }
  });
  $('input[name="third_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_14") {
        $('.checkbox-pm').prop('checked', false);
      } else {
        $('#b_checkbox_14').prop('checked', false);
      }
    }
  });
  $('input[name="fourth_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_18") {
        $('.checkbox-mi').prop('checked', false);
      } else {
        $('#b_checkbox_18').prop('checked', false);
      }
    }
  });
  $('input[name="fifth_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_23") {
        $('.checkbox-ct').prop('checked', false);
      } else {
        $('#b_checkbox_23').prop('checked', false);
      }
    }
  });
  $('input[name="sixth_checkbox"]').change(function(){
    var checkboxId = $(this).attr('id');
    if($(this).is(':checked')){
      if (checkboxId == "b_checkbox_29") {
        $('.checkbox-gc').prop('checked', false);
      } else {
        $('#b_checkbox_29').prop('checked', false);
      }
    }
  });
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  // FIN JQUERY FORM 3
  // INICIO JQUERY FORM 4
  $('.input100.viabilidad-financiera').change(function() {
      var count = 0;
      var result = 0;
      $('.input100.viabilidad-financiera.active').each(function() {
          count += +1;
          result += +$(this).val() / $('#input-anual-default-' + count).val();
      })
      $('#n_ingresos_anuales').val(result);
  });
  $(document).on('change', '.input100.financiera.inv-estimate', function() {
      var count = 0;
      var result_1 = 0;
      var result_2 = 0;
      var result_3 = 0;
      var result_4 = 0;
      $('.input100.financiera.inv-estimate.1').each(function() {
          count = 1;
          result_1 += +$(this).val() / $('#input-anual-default-' + 1).val();
      });
      $('.input100.financiera.inv-estimate.2').each(function() {
          result_2 += +$(this).val() / $('#input-anual-default-' + 2).val();
      });
      $('.input100.financiera.inv-estimate.3').each(function() {
          result_3 += +$(this).val() / $('#input-anual-default-' + 3).val();
      });
      $('.input100.financiera.inv-estimate.4').each(function() {
          result_4 += +$(this).val() / $('#input-anual-default-' + 4).val();
      });
      $('#Pres-total').val(result_1 + result_2 + result_3 + result_4);
  });
  function estimate_cost() {
      var Table_Dates = new Array();
      $('.input100.entrada.table-date').each(function() {
          if ($(this).val() != "") {
              var date = new Date($(this).val());
              year = date.getFullYear();
              if ($("." + year).hasClass(year) == false) {
                  Table_Dates.push(year);
              }
          }
      });
      loop_estimate(Table_Dates.sort());
  };
<<<<<<< HEAD

=======
  function financialInputs(){
    $('#n_ingresos_anuales').each(function(){
        if ($(this).val() == "0") {
          alert_notification('El ingreso anual debe ser diferente a 0.');
          return financialInputs();
        }
    });
    $('#n_ebitda').each(function(){
        if ($(this).val() == "0") {
          alert_notification('El EBITDA debe ser diferente a 0.');
          return financialInputs();
        }
    });
    $('#Pres-total').each(function(){
        if ($(this).val() == "0") {
          alert_notification('El presupuesto total debe ser diferente a 0.');
          return financialInputs();
        }
    });
  }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  // REVISAR
  function loop_estimate(Table_Dates) {
      var length_thead = document.getElementById("tr-head").childElementCount;
      for (var i = 0; i < Table_Dates.length; i++) {
          // if (length_thead > 2) {
          if ($("." + Table_Dates[i]).hasClass(Table_Dates[i]) == false) {
              $('#last_th').before("<th id=" + [i] + " class=" + Table_Dates[i] + ">" + Table_Dates[i] + "</th>");
              for (var j = 0; j < 5; j++) {
                  $('#tr_' + [j]).before('<td><div class="input-icons"><i class="material-icons icon">attach_money</i><input class="input100 financiera inv-estimate ' + [j] + '" type="number" id="n_cost_'+Table_Dates[i]+'_'+[j]+'" onkeydown="return event.keyCode !== 69" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>');
              }
          }
      }
  }
  function ciclo_and_bc(subcategory){
    $('#n_ciclo_vida').removeClass('active');
    $('#n_relation_bc').removeClass('active');
    $('#ciclo-input-div').hide();
    $('#div-bc').hide();
    $('#ciclo-select-div').hide();
    // Atractividad técnica
    $('.comp-crec').hide();
    $('.comp-co').hide();
    $('.comp-ti').hide();
    $('.comp-ac').hide();
    $('#div-cual-ti').hide();
    $('#div-cual-co').hide();
    $('#div-cual-ac').hide();
    $('#span-ciclo-title').text('Ciclo de vida del producto (años) *');
    switch (subcategory) {
      case 'CREC':
        $('#ciclo-input-div').show();
        $('#n_ciclo_vida').addClass('active');
        $('.comp-crec').show();
        break;
      case 'Continuidad operacional':
        $('#div-bc').show();
        $('#n_relation_bc').addClass('active');
        $('.comp-co').show();
        break;
      case 'Tecnología de información':
        $('#span-ciclo-title').text('Ciclo de vida de la tecnología (años) *');
        $('#div-bc').show();
        $('#n_relation_bc').addClass('active');
        $('#ciclo-select-div').show();
        $('.comp-ti').show();
        break;
      case 'Administrativos corporativos':
        $('#div-bc').show();
        $('#n_relation_bc').addClass('active');
        $('#ciclo-select-div').show();
        $('.comp-ac').show();
        break;
      default:
        $('#ciclo-input-div').show();
        $('#n_ciclo_vida').addClass('active');
        $('.comp-crec').show();
        console.log('error en la obtención de subcategoría.');
    }
  }
  // FIN JQUERY FORM 4
  // INICIO JQUERY FORM 5
  $(document).ready(function() {
      // CRECIMIENTO AT
      // Interconexión
      $('#t_interconexion_crec').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'FE') {
              $('#interconexion-span').text("Baja emisión y grandes usuarios industriales/comerciales o ciudades de más de 4 Millones de habitantes.");
          } else if (value_rest == 'FE-GU') {
              $('#interconexion-span').text("Sector petroquímico, Clúster o ciudades entre 3 y 4 Millones de habitantes.");
          } else if (value_rest == 'FE-CP') {
              $('#interconexion-span').text("Ciudades con menos de 3 Millones de habitantes.");
          }
      });
      // Complejidad del proyecto
      $('#t_complejidad_crec').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Alta') {
              $('#complejidad-crec-span-1').text("- Más de tres activos para construir o línea de más de 100 km.");
              $('#complejidad-crec-span-2').text("- CAPEX mayor de MUSD 100.");
              $('#complejidad-crec-span-3').text("- Requiere expertos senior.");
              $('#complejidad-crec-span-4').text("- Gran esfuerzo de ingeniería.");
          } else if (value_rest == 'Media') {
              $('#complejidad-crec-span-1').text("- Dos a tres activos para construir o línea entre 50 y 100 km.");
              $('#complejidad-crec-span-2').text("- CAPEX entre MUSD 20 y 100.");
              $('#complejidad-crec-span-3').text("- Requiere pocos expertos senior.");
              $('#complejidad-crec-span-4').text("- Esfuerzo mayor de ingeniería.");
          } else if (value_rest == 'Baja') {
              $('#complejidad-crec-span-1').text("- Un activo para construir.");
              $('#complejidad-crec-span-2').text("- CAPEX menor a MUSD 20.");
              $('#complejidad-crec-span-3').text("- No requiere recursos de expertos senior.");
              $('#complejidad-crec-span-4').text("- Esfuerzo normal de ingeniería.");
          }
      });
      // Gestión social
      $('#t_gestion_soc_crec').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Bajo') {
              $('#social-span').text("Sin presencia de comunidades o grupos étnicos / zonas con antecedentes de negociaciones exitosas para proyectos lineales.");
          } else if (value_rest == 'Medio') {
              $('#social-span').text("Presencia de comunidades o grupos étnicos sin antecedentes de oposición.");
          } else if (value_rest == 'Alto') {
              $('#social-span').text("Presencia de comunidades y grupos étnicos con antecedentes de oposición.");
          }
      });
      // Gestión ambiental
      $('#t_gestion_amb_crec').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Bajo') {
              $('#gestion-ambiental-span').text("Cambio menor de licencia ambiental.");
          } else if (value_rest == 'Medio') {
              $('#gestion-ambiental-span').text("Licenciamiento ambiental ante corporaciones.");
          } else if (value_rest == 'Alto') {
              $('#gestion-ambiental-span').text("Licenciamiento ambiental ante ANLA.");
          }
      });
      // Sinergia con otros poryectos o activos propios
      $('#t_sinergia_crec').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Alta') {
              $('#sinergia-crec-span').text("En sinergia con otras empresas, activos o proyectos del GEB o Proyectos futuros.");
          } else if (value_rest == 'Media') {
              $('#sinergia-crec-span').text("Cercano a proyectos o activos actuales del GEB.");
          } else if (value_rest == 'Baja') {
              $('#sinergia-crec-span').text("Sin conectividad o cercanía con proyectos o activos actuales del GEB.");
          }
      });
  });
  // Fin, atractividad técnica - crecimiento
  // CO AT
  $(document).ready(function() {
      $('#t_sinergia_co').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'SI') {
              $('#div-cual-co').show();
              $('#t_cual_co').addClass('active');
          } else {
              $('#t_cual_co').removeClass('active');
              $('#t_cual_ti').removeClass('active');
              $('#t_cual_ac').removeClass('active');
              $('#div-cual-co').hide();
              $('#div-cual-ac').hide();
              $('#div-cual-ti').hide();
          }
      });
  });
  // TI AT
  $(document).ready(function() {
      // Complejidad del proyecto
      $('#t_complejidad_ti').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Alta') {
              $('#complejidad-ti-span').text("Duración ejecución proyecto mayor a 8 meses, participación de más de 3 áreas de la empresa y un equipo de proyecto mayor a 5 personas.");
          } else if (value_rest == 'Media') {
              $('#complejidad-ti-span').text("Duración ejecución proyecto entre 4 y  8 meses, participación de 2 áreas diferentes a TI y un equipo de proyecto en promedio de 3 o 4 personas.");
          } else if (value_rest == 'Baja') {
              $('#complejidad-ti-span').text("Duración ejecución proyecto menor a 4 meses, participación de 1 o ninguna área diferente a TI y un equipo de proyecto de hasta 3 personas.");
          }
      });
      // Resistencia al cambio
      $('#t_resistencia_ti').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'Alta') {
              $('#span-resistencia-ti').text("No es un cambio necesario y en la compañía se ve como una carga adicional en las tareas.");
          } else if (value_rest == 'Media') {
              $('#span-resistencia-ti').text("Es un cambio necesario y en la compañía no se ve un cambio en el nivel de esfuerzo al realizar las tareas.");
          } else if (value_rest == 'Baja') {
              $('#span-resistencia-ti').text("Es un cambio necesario y en la compañía se ve como un alivio en las tareas.");
          }
      });
      $('#t_sinergia_ti').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'SI') {
              $('#div-cual-ti').show();
              $('#t_cual_ti').addClass('active');
          } else {
              $('#t_cual_co').removeClass('active');
              $('#t_cual_ti').removeClass('active');
              $('#t_cual_ac').removeClass('active');
              $('#div-cual-ti').hide();
              $('#div-cual-co').hide();
              $('#div-cual-ac').hide();
          }
      });
  });
  // AC AT
  $(document).ready(function() {
      // Restricciones regulatorias
      $('#t_restricciones_ac').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'no') {
              $('#span-restricciones-reg').text("Para implementarlo no se requieren trámites (p.e. licencias o permisos) que pongan en riesgo la ejecución o la retrasen.");
          } else if (value_rest == 'algunos') {
              $('#span-restricciones-reg').text("Para implementarlo se requieren algunos trámites (p.e. licencias o permisos) que podrían retrasar la ejecución.");
          } else if (value_rest == 'si') {
              $('#span-restricciones-reg').text("Para implementarlo se requieren  trámites (p.e. licencias o permisos) que ponen en riesgo la ejecución o la retrasan.");
          }
      });
      // Disponibilidad de los recursos
      $('#t_disponibilidad_ac').change(function() {
          var value_disponibilidad = document.getElementById(this.id).value;
          if (value_disponibilidad == 'Alta') {
              $('#disponibilidad-span').text("GEB cuenta con recursos competentes suficientes para implementarlo.");
          } else if (value_disponibilidad == 'Media') {
              $('#disponibilidad-span').text("GEB debe contratar algunos recursos nuevos para implementarlo.");
          } else if (value_disponibilidad == 'Baja') {
              $('#disponibilidad-span').text("GEB debe contratar todos los recursos para implementarlo.");
          }
      });
      // Impacto en SST
      $('#t_impacto_sst_ac').change(function() {
          var value_sst = document.getElementById(this.id).value;
          if (value_sst == 'Bajo') {
              $('#impacto-sst-info-span').text("No reducen la probebilidad de accidentes, incidentes y enfermedades laborales.");
          } else if (value_sst == 'Medio') {
              $('#impacto-sst-info-span').text("Se evidencia mejoras potenciales en al menos uno de los aspectos (salud o seguridad en el trabajo).");
          } else if (value_sst == 'Alto') {
              $('#impacto-sst-info-span').text("Reduce la probabilidad de accidentes, incidentes y enfermedades laborales.");
          }
      });
      // Sinergia con estrategias de gestión humana
      $('#t_sinergia_gh_ac').change(function() {
          var value_sinergia = document.getElementById(this.id).value;
          // console.log(value_sinergia);
          if (value_sinergia == 'Alta') {
              $('#sinergia-span').text("Permite apalancar las estrategias de gestión humana y calidad de vida.");
          } else if (value_sinergia == 'Media') {
              $('#sinergia-span').text("Apalanca alguna de las estrategias de gestión humana y calidad de vida.");
          } else if (value_sinergia == 'Baja') {
              $('#sinergia-span').text("No apalanca las estrategias de gestión humana y calidad de vida.");
          }
      });
      $('#t_sinergia_ac').change(function() {
          var value_rest = document.getElementById(this.id).value;
          if (value_rest == 'SI') {
              $('#div-cual-ac').show();
              $('#t_cual_ac').addClass('active');
          } else {
              $('#t_cual_co').removeClass('active');
              $('#t_cual_ti').removeClass('active');
              $('#t_cual_ac').removeClass('active');
              $('#div-cual-ac').hide();
              $('#div-cual-co').hide();
              $('#div-cual-ti').hide();
          }
      });
  });
  //  FIN JQUERY FORM 5
  // FORM 6
  $(document).ready(function() {
      $('.event').on("dragstart", function(event) {
          var dt = event.originalEvent.dataTransfer;
          dt.setData('Text', $(this).attr('id'));
      });
      $('table td').on("dragenter dragover drop", function(event) {
          event.preventDefault();
          if (event.type === 'drop') {
              var data = event.originalEvent.dataTransfer.getData('Text', $(this).attr('id'));
              position = $('#' + data).attr('data-number');
              $('#t_risk_'+position).addClass('active');
              de = $('#' + data).detach();
              de.appendTo($(this));
          };
      });
      $('table .btn-space').on("dragenter dragover drop", function(event) {
          event.preventDefault();
          if (event.type === 'drop') {
              if ($(this).children().length == 0) {
                var data = event.originalEvent.dataTransfer.getData('Text', $(this).attr('id'));
                de = $('#' + data).detach();
                de.appendTo($(this));
              }
          };
      });
  });
  $('.modal-change').click( function(){
    var rks_position = $(this).parent().parent().attr('data-modal');
    var select_prob = $('#prob-select-'+rks_position).children(":selected").val();
    var select_impact = $('#impact-select-'+rks_position).children(":selected").val();
    if (select_prob != 'default' && select_impact != 'default') {
        $('#risk_'+rks_position).remove();
        $('[data-impact="' + select_impact + '"][data-prob="' + select_prob + '"]').append($('<a>', {
            id: 'risk_'+rks_position,
            class: 'event btn-floating btn-large title modal-trigger red',
            href: '#detailBtnRisks'+rks_position,
            // draggable: true,
            text: 'R'+rks_position
        }).attr(
           'data-number', rks_position
        ));
        // alert($('#risk_'+rks_position).length);
      } else {
        alert_notification('Probabilidad e impacto son obligatorios');
      }
  });
  $('.modal-reset').click(function(){
    var rks_position = $(this).parent().parent().attr('data-modal');
    $('#risk_'+rks_position).remove();
    $('#space-'+rks_position).append($('<a>', {
        id: 'risk_'+rks_position,
        class: 'event btn-floating btn-large title modal-trigger red',
        href: '#detailBtnRisks'+rks_position,
        text: 'R'+rks_position
    }).attr(
       'data-number', rks_position
    ));
    var estrategic_select = $('select[name="risk-coord-'+rks_position+'"]');
    estrategic_select.prop('selectedIndex', 0);
    estrategic_select.formSelect();
  });
  // $('.modal-close.waves-effect.error.btn.btn-depressed').click( function(){
  //   var rks_position = $(this).parent().parent().attr('data-modal');
  //   $("#risk_"+rks_position).prependTo($("#space-"+rks_position));
  //   $('#t_risk_'+rks_position).removeClass('active');
  // });
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
    // FORM 4
    // CREC
    $('.input100.viabilidad-financiera.active').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('.input300.financiera.materialize-textarea').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('.input100.financiera.inv-estimate').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('.input100.financiera.active').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('.input100.viabilidad-financiera-inputs.active').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('#Pres-total').each(function(){
        array_form[$(this).attr('name')] = $(this).val();
    });
    // FORM 5
    $('.input100.form5.active').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });
    // FORM 6
    var cont_rks = 0;
    $('.risks-input.materialize-textarea.active').each(function(){
        // alert(cont_rks++);
        array_form[$(this).attr('id')] = $(this).val();
    });
    $('.event.btn-floating.btn-large.title.modal-trigger').each(function(){
      var impact_rks = $(this).parent().attr('data-impact');
      if (impact_rks != undefined) {
        array_form[$(this).attr('id')+'_impact'] = $(this).parent().attr('data-impact');
        array_form[$(this).attr('id')+'_prob'] = $(this).parent().attr('data-prob');
      }
    });
    array_form['t_email_user'] = $('#email-element').text();
    $('[name="input_gi"]').each(function(){
        array_form[$(this).attr('id')] = $(this).val();
    });

    console.log(array_form);
    json_format = JSON.stringify({"data" : [array_form]});
    send_json(json_format);
  }
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  function send_json(json_form){
    xhr_form = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "POST",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Ryos','action'=>'download_ryos']);?>",
        data: {ryos_form : json_form},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
<<<<<<< HEAD
          console.log(response);
          if (response.status == '200') {
              success_text = response.event_1+': '+response.record_no;
              success_notification(success_text);
=======
          if (response.status == '200') {
              success_text = response.event_1+': '+response.record_no;
              success_notification(success_text);
          } else {
            alert_notification("Error durante el envío de RYOS.")
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          }
        }
      });
  }
  $('.copy-gi').click(function(){
    var text = $(this).parent().prev().get(0);
    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(text);
    selection.removeAllRanges();
    selection.addRange(range);
    //add to clipboard.
    document.execCommand('copy');
  });
  // VALIDACIONES
</script>
