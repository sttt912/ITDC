import QtQuick 2.13
import QtQuick.Window 2.13
import QtWebView 1.1

Window {
    id: mainWindow
    visible: true

    WebView {
        id: webView
        anchors.fill: parent
        url: initialUrl
    }
}

