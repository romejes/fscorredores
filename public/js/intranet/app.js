(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{1:function(t,e,n){"use strict";n.d(e,"a",(function(){return i})),n.d(e,"d",(function(){return r})),n.d(e,"c",(function(){return a})),n.d(e,"b",(function(){return s}));var o=n(0),c=n.n(o);function i(t){return document.querySelectorAll(t).length>0}function r(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0,e=window.location.protocol+"//"+window.location.hostname;return void 0===t?e:"".concat(e,"/").concat(t)}function a(t){var e=window.location.href.split("/");return e.splice(0,3),e[t]}function s(t,e,n){return c()(t,e).locale("es_MX").format(n)}},146:function(t,e){var n,o,c=t.exports={};function i(){throw new Error("setTimeout has not been defined")}function r(){throw new Error("clearTimeout has not been defined")}function a(t){if(n===setTimeout)return setTimeout(t,0);if((n===i||!n)&&setTimeout)return n=setTimeout,setTimeout(t,0);try{return n(t,0)}catch(e){try{return n.call(null,t,0)}catch(e){return n.call(this,t,0)}}}!function(){try{n="function"==typeof setTimeout?setTimeout:i}catch(t){n=i}try{o="function"==typeof clearTimeout?clearTimeout:r}catch(t){o=r}}();var s,u=[],l=!1,d=-1;function f(){l&&s&&(l=!1,s.length?u=s.concat(u):d=-1,u.length&&j())}function j(){if(!l){var t=a(f);l=!0;for(var e=u.length;e;){for(s=u,u=[];++d<e;)s&&s[d].run();d=-1,e=u.length}s=null,l=!1,function(t){if(o===clearTimeout)return clearTimeout(t);if((o===r||!o)&&clearTimeout)return o=clearTimeout,clearTimeout(t);try{o(t)}catch(e){try{return o.call(null,t)}catch(e){return o.call(this,t)}}}(t)}}function m(t,e){this.fun=t,this.array=e}function b(){}c.nextTick=function(t){var e=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)e[n-1]=arguments[n];u.push(new m(t,e)),1!==u.length||l||a(j)},m.prototype.run=function(){this.fun.apply(null,this.array)},c.title="browser",c.browser=!0,c.env={},c.argv=[],c.version="",c.versions={},c.on=b,c.addListener=b,c.once=b,c.off=b,c.removeListener=b,c.removeAllListeners=b,c.emit=b,c.prependListener=b,c.prependOnceListener=b,c.listeners=function(t){return[]},c.binding=function(t){throw new Error("process.binding is not supported")},c.cwd=function(){return"/"},c.chdir=function(t){throw new Error("process.chdir is not supported")},c.umask=function(){return 0}},147:function(t,e){t.exports=function(t){return t.webpackPolyfill||(t.deprecate=function(){},t.paths=[],t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),t.webpackPolyfill=1),t}},148:function(t,e,n){var o={"./af":10,"./af.js":10,"./ar":11,"./ar-dz":12,"./ar-dz.js":12,"./ar-kw":13,"./ar-kw.js":13,"./ar-ly":14,"./ar-ly.js":14,"./ar-ma":15,"./ar-ma.js":15,"./ar-sa":16,"./ar-sa.js":16,"./ar-tn":17,"./ar-tn.js":17,"./ar.js":11,"./az":18,"./az.js":18,"./be":19,"./be.js":19,"./bg":20,"./bg.js":20,"./bm":21,"./bm.js":21,"./bn":22,"./bn-bd":23,"./bn-bd.js":23,"./bn.js":22,"./bo":24,"./bo.js":24,"./br":25,"./br.js":25,"./bs":26,"./bs.js":26,"./ca":27,"./ca.js":27,"./cs":28,"./cs.js":28,"./cv":29,"./cv.js":29,"./cy":30,"./cy.js":30,"./da":31,"./da.js":31,"./de":32,"./de-at":33,"./de-at.js":33,"./de-ch":34,"./de-ch.js":34,"./de.js":32,"./dv":35,"./dv.js":35,"./el":36,"./el.js":36,"./en-au":37,"./en-au.js":37,"./en-ca":38,"./en-ca.js":38,"./en-gb":39,"./en-gb.js":39,"./en-ie":40,"./en-ie.js":40,"./en-il":41,"./en-il.js":41,"./en-in":42,"./en-in.js":42,"./en-nz":43,"./en-nz.js":43,"./en-sg":44,"./en-sg.js":44,"./eo":45,"./eo.js":45,"./es":46,"./es-do":47,"./es-do.js":47,"./es-mx":48,"./es-mx.js":48,"./es-us":49,"./es-us.js":49,"./es.js":46,"./et":50,"./et.js":50,"./eu":51,"./eu.js":51,"./fa":52,"./fa.js":52,"./fi":53,"./fi.js":53,"./fil":54,"./fil.js":54,"./fo":55,"./fo.js":55,"./fr":56,"./fr-ca":57,"./fr-ca.js":57,"./fr-ch":58,"./fr-ch.js":58,"./fr.js":56,"./fy":59,"./fy.js":59,"./ga":60,"./ga.js":60,"./gd":61,"./gd.js":61,"./gl":62,"./gl.js":62,"./gom-deva":63,"./gom-deva.js":63,"./gom-latn":64,"./gom-latn.js":64,"./gu":65,"./gu.js":65,"./he":66,"./he.js":66,"./hi":67,"./hi.js":67,"./hr":68,"./hr.js":68,"./hu":69,"./hu.js":69,"./hy-am":70,"./hy-am.js":70,"./id":71,"./id.js":71,"./is":72,"./is.js":72,"./it":73,"./it-ch":74,"./it-ch.js":74,"./it.js":73,"./ja":75,"./ja.js":75,"./jv":76,"./jv.js":76,"./ka":77,"./ka.js":77,"./kk":78,"./kk.js":78,"./km":79,"./km.js":79,"./kn":80,"./kn.js":80,"./ko":81,"./ko.js":81,"./ku":82,"./ku.js":82,"./ky":83,"./ky.js":83,"./lb":84,"./lb.js":84,"./lo":85,"./lo.js":85,"./lt":86,"./lt.js":86,"./lv":87,"./lv.js":87,"./me":88,"./me.js":88,"./mi":89,"./mi.js":89,"./mk":90,"./mk.js":90,"./ml":91,"./ml.js":91,"./mn":92,"./mn.js":92,"./mr":93,"./mr.js":93,"./ms":94,"./ms-my":95,"./ms-my.js":95,"./ms.js":94,"./mt":96,"./mt.js":96,"./my":97,"./my.js":97,"./nb":98,"./nb.js":98,"./ne":99,"./ne.js":99,"./nl":100,"./nl-be":101,"./nl-be.js":101,"./nl.js":100,"./nn":102,"./nn.js":102,"./oc-lnc":103,"./oc-lnc.js":103,"./pa-in":104,"./pa-in.js":104,"./pl":105,"./pl.js":105,"./pt":106,"./pt-br":107,"./pt-br.js":107,"./pt.js":106,"./ro":108,"./ro.js":108,"./ru":109,"./ru.js":109,"./sd":110,"./sd.js":110,"./se":111,"./se.js":111,"./si":112,"./si.js":112,"./sk":113,"./sk.js":113,"./sl":114,"./sl.js":114,"./sq":115,"./sq.js":115,"./sr":116,"./sr-cyrl":117,"./sr-cyrl.js":117,"./sr.js":116,"./ss":118,"./ss.js":118,"./sv":119,"./sv.js":119,"./sw":120,"./sw.js":120,"./ta":121,"./ta.js":121,"./te":122,"./te.js":122,"./tet":123,"./tet.js":123,"./tg":124,"./tg.js":124,"./th":125,"./th.js":125,"./tk":126,"./tk.js":126,"./tl-ph":127,"./tl-ph.js":127,"./tlh":128,"./tlh.js":128,"./tr":129,"./tr.js":129,"./tzl":130,"./tzl.js":130,"./tzm":131,"./tzm-latn":132,"./tzm-latn.js":132,"./tzm.js":131,"./ug-cn":133,"./ug-cn.js":133,"./uk":134,"./uk.js":134,"./ur":135,"./ur.js":135,"./uz":136,"./uz-latn":137,"./uz-latn.js":137,"./uz.js":136,"./vi":138,"./vi.js":138,"./x-pseudo":139,"./x-pseudo.js":139,"./yo":140,"./yo.js":140,"./zh-cn":141,"./zh-cn.js":141,"./zh-hk":142,"./zh-hk.js":142,"./zh-mo":143,"./zh-mo.js":143,"./zh-tw":144,"./zh-tw.js":144};function c(t){var e=i(t);return n(e)}function i(t){if(!n.o(o,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return o[t]}c.keys=function(){return Object.keys(o)},c.resolve=i,t.exports=c,c.id=148},159:function(t,e,n){n(181),t.exports=n(183)},181:function(t,e,n){"use strict";n.r(e);var o=n(8),c=n(1);Object(c.a)("form")&&Object(o.b)();var i=n(3),r=n(7),a=n.n(r);function s(t,e){return a.a.put("".concat(i.a.ROUTE_PUT_CAMBIAR_ESTADO_COMPRA_SOAT,"/").concat(t),e)}function u(t,e){return a.a.put("".concat(i.a.ROUTE_PUT_CAMBIAR_ESTADO_COTIZACION_SOAT,"/").concat(t),e)}function l(t,e){return a.a.put("".concat(i.a.ROUTE_PUT_CAMBIAR_ESTADO_COTIZACION_VEHICULO_TODO_RIESGO,"/").concat(t),e)}function d(t,e){return a.a.put("".concat(i.a.ROUTE_PUT_CAMBIAR_ESTADO_AFILIACION_SEGURO_ESTUDIANTE,"/").concat(t),e)}var f=n(5),j=n.n(f),m="frm-comprar-soat",b="frm-cotizar-soat",O="frm-cotizar-seguro-vehiculo",h="frm-afiliar-seguro-estudiante";function E(){var t=document.getElementById("frm-login");if(!Object(o.a)(t))return!1;var e,n=new FormData(t);(e=n,a.a.post(i.a.ROUTE_LOGIN,e)).then((function(){window.location.href=i.a.ROUTE_DASHBOARD})).catch((function(t){404===t.response.status&&j.a.fire({title:"Error",text:t.response.data.message,icon:"error",confirmButtonText:"Aceptar"})}))}function p(t){var e,n,o,i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"attend",r=Object(c.c)(3);"attend"==i&&(n={rechazar:!1},o=T()),"reject"==i&&(n={rechazar:!0},o=g()),o.then((function(o){if(o.isConfirmed){switch(t){case m:e=s(r,n);break;case b:e=u(r,n);break;case h:e=d(r,n);break;case O:e=l(r,n)}e.then((function(){"reject"===i?_():v()}))}}))}function g(){return j.a.fire({title:"Rechazar solicitud",text:"¿Está seguro que quiere rechazar esta solicitud?",icon:"warning",showCancelButton:!0,confirmButtonText:"Rechazar",cancelButtonText:"No rechazar"})}function T(){return j.a.fire({title:"Marcar como atendido",text:"¿Está seguro que quiere marcar esta solicitud como atendida?",icon:"warning",showCancelButton:!0,confirmButtonText:"Si",cancelButtonText:"No"})}function _(){j.a.fire({title:"Solicitud rechazada",text:"La solicitud ha sido marcada como rechazada ",icon:"success",confirmButtonText:"Aceptar"}).then((function(){window.location.reload()}))}function v(){j.a.fire({title:"Solicitud atendida",text:"La solicitud ha sido marcada como atendidad",icon:"success",confirmButtonText:"Aceptar"}).then((function(){window.location.reload()}))}n(157);Object(c.a)("#frm-login")&&(Object(o.c)(),document.getElementById("btn-login").addEventListener("click",(function(){return E()})),document.getElementById("txt-contrasena").addEventListener("keyup",(function(t){"Enter"===t.key&&E()}))),Object(c.a)("#btn-logout")&&document.getElementById("btn-logout").addEventListener("click",(function(){j.a.fire({title:"Salir del Sistema",text:"¿Está seguro de que desea salir del sistema?",icon:"question",showCancelButton:!0,confirmButtonText:"Si",cancelButtonText:"No",focusConfirm:!1,focusCancel:!0,allowOutsideClick:!1,allowEscapeKey:!1}).then((function(t){t.value&&(window.location.href=i.a.ROUTE_LOGOUT)}))}));var y=n(2);Object(c.a)("#tbl-compras-soat")&&(Object(y.e)(),document.getElementById("btn-buscar").addEventListener("click",(function(){return Object(y.c)()})),document.getElementById("btn-limpiar").addEventListener("click",(function(){return Object(y.a)()}))),Object(c.a)("#detail-compra-soat")&&(document.getElementById("btn-rechazar").addEventListener("click",(function(){return p(m,"reject")})),document.getElementById("btn-marcar-atendido").addEventListener("click",(function(){return p(m)}))),Object(c.a)("#tbl-cotizaciones-soat")&&(Object(y.f)(),document.getElementById("btn-buscar").addEventListener("click",(function(){return Object(y.c)()})),document.getElementById("btn-limpiar").addEventListener("click",(function(){return Object(y.a)()}))),Object(c.a)("#detail-cotizacion-soat")&&(document.getElementById("btn-rechazar").addEventListener("click",(function(){return p(b,"reject")})),document.getElementById("btn-marcar-atendido").addEventListener("click",(function(){return p(b)}))),Object(c.a)("#tbl-afiliaciones-seguro-estudiante")&&(Object(y.d)(),document.getElementById("btn-buscar").addEventListener("click",(function(){return Object(y.c)()})),document.getElementById("btn-limpiar").addEventListener("click",(function(){return Object(y.a)()})),document.getElementById("btn-excel").addEventListener("click",(function(){return Object(y.b)()}))),Object(c.a)("#detail-afiliacion-seguro-estudiante")&&(document.getElementById("btn-rechazar").addEventListener("click",(function(){return p(h,"reject")})),document.getElementById("btn-marcar-atendido").addEventListener("click",(function(){return p(h)}))),Object(c.a)("#tbl-cotizaciones-vehiculo-todo-riesgo")&&(Object(y.g)(),document.getElementById("btn-buscar").addEventListener("click",(function(){return Object(y.c)()})),document.getElementById("btn-limpiar").addEventListener("click",(function(){return Object(y.a)()}))),Object(c.a)("#detail-cotizacion-vehiculo-todo-riesgo")&&(document.getElementById("btn-rechazar").addEventListener("click",(function(){return p(O,"reject")})),document.getElementById("btn-marcar-atendido").addEventListener("click",(function(){return p(O)})))},183:function(t,e){},2:function(t,e,n){"use strict";(function(t){n.d(e,"e",(function(){return r})),n.d(e,"f",(function(){return a})),n.d(e,"g",(function(){return s})),n.d(e,"d",(function(){return u})),n.d(e,"c",(function(){return l})),n.d(e,"a",(function(){return d})),n.d(e,"b",(function(){return f}));n(158),n(177);var o=n(1),c=n(3),i=[{title:"Codigo",field:"solicitud.codigo"},{title:"Solicitado Por",formatter:function(t,e){if("J"===e.tipo_cliente)return e.razon_social;var n="".concat(e.nombres," ").concat(e.apellido_paterno);return e.apellido_materno&&(n+=" ".concat(e.apellido_materno)),n}},{title:"Fecha y Hora de Envio",formatter:function(t,e){return Object(o.b)(e.solicitud.fecha_hora_registro,"YYYY-MM-DD h:mm:ss","DD [de] MMMM [de] YYYY h:mm a")}},{title:"Estado",formatter:function(e,n){var o="";switch(n.solicitud.estado_solicitud.id){case 1:o="badge-warning";break;case 2:o="badge-primary";break;case 3:o="badge-success";break;case 4:o="badge-danger"}return t("<span></span>",{class:"badge ".concat(o),text:n.solicitud.estado_solicitud.descripcion}).prop("outerHTML")}},{field:"solicitud.estado_solicitud.id",searchFormatter:!0,visible:!1}];function r(){t("#tbl-compras-soat").bootstrapTable({url:c.a.ROUTE_GET_COMPRAS_SOAT,pagination:!0,responseHandler:function(t){return t.data},columns:[].concat(i,[{title:"Acciones",formatter:function(e,n){return t("<a></a>",{class:"btn",href:Object(o.d)("intranet/compras/soat/".concat(n.solicitud.codigo)),html:'<i class="fas fa-list text-primary"></i>',title:"Ver detalles"}).prop("outerHTML")}}])})}function a(){t("#tbl-cotizaciones-soat").bootstrapTable({url:c.a.ROUTE_GET_COTIZACIONES_SOAT,pagination:!0,responseHandler:function(t){return t.data},columns:[].concat(i,[{title:"Acciones",formatter:function(e,n){return t("<a></a>",{class:"btn",href:Object(o.d)("intranet/cotizaciones/soat/".concat(n.solicitud.codigo)),html:'<i class="fas fa-list text-primary"></i>',title:"Ver detalles"}).prop("outerHTML")}}])})}function s(){t("#tbl-cotizaciones-vehiculo-todo-riesgo").bootstrapTable({url:c.a.ROUTE_GET_COTIZACIONES_SEGURO_VEHICULO,pagination:!0,responseHandler:function(t){return t.data},columns:[].concat(i,[{title:"Acciones",formatter:function(e,n){return t("<a></a>",{class:"btn",href:Object(o.d)("intranet/cotizaciones/vehiculo_todo_riesgo/".concat(n.solicitud.codigo)),html:'<i class="fas fa-list text-primary"></i>',title:"Ver detalles"}).prop("outerHTML")}}])})}function u(){t("#tbl-afiliaciones-seguro-estudiante").bootstrapTable({url:c.a.ROUTE_GET_AFILIACION_SEGURO_ESTUDIANTE,pagination:!0,responseHandler:function(t){return t.data},columns:[].concat(i,[{title:"Acciones",formatter:function(e,n){return t("<a></a>",{class:"btn",href:Object(o.d)("intranet/afiliaciones/seguro_estudiante/".concat(n.solicitud.codigo)),html:'<i class="fas fa-list text-primary"></i>',title:"Ver detalles"}).prop("outerHTML")}}])})}function l(){var e=t("#txt-cliente").val(),n=t("#sel-estado_solicitud").val();t(".table").bootstrapTable("filterBy",{estado_solicitud:n,cliente:e},{filterAlgorithm:function(t,e){var n=!1,o="".concat(t.nombres," ").concat(t.apellido_paterno," ").concat(t.apellido_materno);return!(!(n=""==e.cliente||-1!==o.indexOf(e.cliente))||-1!=e.estado_solicitud)||!(!n||e.estado_solicitud!=t.solicitud.estado_solicitud.id)}})}function d(){t("#txt-cliente").val(""),t("#sel-estado_solicitud").val(-1),l()}function f(){window.location.href=Object(o.d)("afiliaciones/seguro_estudiante/reporte")}}).call(this,n(6))},3:function(t,e,n){"use strict";n.d(e,"a",(function(){return c}));var o=n(1),c={ROUTE_LOGIN:Object(o.d)("login"),ROUTE_DASHBOARD:Object(o.d)("intranet"),ROUTE_LOGOUT:Object(o.d)("logout"),ROUTE_GET_COMPRAS_SOAT:Object(o.d)("compras/soat"),ROUTE_GET_COTIZACIONES_SOAT:Object(o.d)("cotizaciones/soat"),ROUTE_GET_COTIZACIONES_SEGURO_VEHICULO:Object(o.d)("cotizaciones/vehiculo_todo_riesgo"),ROUTE_GET_AFILIACION_SEGURO_ESTUDIANTE:Object(o.d)("afiliaciones/seguro_estudiante"),ROUTE_PUT_CAMBIAR_ESTADO_COMPRA_SOAT:Object(o.d)("compras/soat"),ROUTE_PUT_CAMBIAR_ESTADO_COTIZACION_SOAT:Object(o.d)("cotizaciones/soat"),ROUTE_PUT_CAMBIAR_ESTADO_AFILIACION_SEGURO_ESTUDIANTE:Object(o.d)("afiliaciones/seguro_estudiante"),ROUTE_PUT_CAMBIAR_ESTADO_COTIZACION_VEHICULO_TODO_RIESGO:Object(o.d)("cotizaciones/vehiculo_todo_riesgo")}},8:function(t,e,n){"use strict";(function(t){n.d(e,"b",(function(){return o})),n.d(e,"a",(function(){return c})),n.d(e,"c",(function(){return i}));n(145),n(160);function o(){t.validator.setDefaults({lang:"es",errorElement:"span",errorPlacement:function(t,e){!function(t,e){t.addClass("invalid-feedback"),e.closest(".form-group").append(t)}(t,e)},highlight:function(e,n,o){!function(e){t(e).addClass("is-invalid")}(e)},unhighlight:function(e,n,o){!function(e){t(e).removeClass("is-invalid")}(e)}})}function c(e){return t(e).valid()}function i(){t("#frm-login").validate({rules:{usuario:{required:!0},contrasena:{required:!0}}})}}).call(this,n(6))},9:function(t,e){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(t){"object"==typeof window&&(n=window)}t.exports=n}},[[159,1,2]]]);