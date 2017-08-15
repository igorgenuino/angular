﻿import { Injectable } from '@angular/core';

@Injectable()
export class RestService {
	
	private BASE_URL: string = "http://localhost:9092/angularjs2shoppingcart/api/";
	private keyName: string = "X_API_KEY";
	private keyValue: string = "034849cb33d276eb61ac6b9871c7a140f08f386b";

	baseURLKey(serviceName: string, methodName: string): string {
        return this.BASE_URL + serviceName + "/" + methodName + this.X_API_Key();
    }

    baseURLNoKey(serviceName: string, methodName: string): string {
        return this.BASE_URL + serviceName + "/" + methodName;
    }

    X_API_Key(): string {
        return "?" + this.keyName + "=" + this.keyValue;
    }
	
	getKey() {
		return this.keyValue;
	}

    getKeyName() {
		return this.keyName;
	}
	
}