#include <QGuiApplication>
#include <QQmlApplicationEngine>

#include <QtCore/QUrl>
#include <QStyleHints>
#include <QScreen>
#include <QtQml/QQmlContext>
#include <QtWebView/QtWebView>

int main(int argc, char *argv[])
{
    QCoreApplication::setAttribute(Qt::AA_EnableHighDpiScaling);
    QGuiApplication app(argc, argv);

    QtWebView::initialize();
    const QString initialUrl = QStringLiteral("http://servakos.tk/");

    QQmlApplicationEngine engine;
    QQmlContext *context = engine.rootContext();
    context->setContextProperty(QStringLiteral("initialUrl"), QUrl(initialUrl));

    const QUrl url(QStringLiteral("qrc:/main.qml"));
    engine.load(url);

    if (engine.rootObjects().isEmpty()){
        return -1;
    }

    return app.exec();
}
