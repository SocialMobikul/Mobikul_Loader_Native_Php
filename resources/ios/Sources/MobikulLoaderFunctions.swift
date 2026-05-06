import Foundation
import NativePHP

enum MobikulLoaderFunctions {
    struct Show: BridgeFunction {
        func run(parameters: [String: Any], resolve: ResolveBlock, reject: RejectBlock) {
            let message = (parameters["message"] as? String) ?? "Loading..."
            resolve([
                "visible": true,
                "message": message
            ])
        }
    }

    struct Hide: BridgeFunction {
        func run(parameters: [String: Any], resolve: ResolveBlock, reject: RejectBlock) {
            resolve([
                "visible": false
            ])
        }
    }
}
