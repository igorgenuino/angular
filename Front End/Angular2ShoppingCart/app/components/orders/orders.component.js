"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require("@angular/core");
var order_service_1 = require("../../services/order.service");
var OrdersComponent = (function () {
    function OrdersComponent(orderService) {
        this.orderService = orderService;
    }
    OrdersComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.orderService.findByUsername(sessionStorage.getItem('username')).subscribe(function (data) { return _this.orders = data; });
    };
    return OrdersComponent;
}());
OrdersComponent = __decorate([
    core_1.Component({
        moduleId: module.id,
        templateUrl: 'orders.component.html'
    }),
    __metadata("design:paramtypes", [order_service_1.OrderService])
], OrdersComponent);
exports.OrdersComponent = OrdersComponent;
//# sourceMappingURL=orders.component.js.map