package com.mobikul.plugins.loader

import com.nativephp.mobile.bridge.BridgeFunction
import com.nativephp.mobile.bridge.BridgeResponse

object MobikulLoaderFunctions {
    class Show : BridgeFunction {
        override fun execute(parameters: Map<String, Any>): Map<String, Any> {
            return BridgeResponse.success(
                mapOf(
                    "visible" to true,
                    "message" to (parameters["message"] ?: "Loading...")
                )
            )
        }
    }

    class Hide : BridgeFunction {
        override fun execute(parameters: Map<String, Any>): Map<String, Any> {
            return BridgeResponse.success(mapOf("visible" to false))
        }
    }
}
