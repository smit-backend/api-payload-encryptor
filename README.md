# FieldCrypto: Envelope Encryption for PII Data

[![GitHub License](https://img.shields.io/github/license/smit-backend/api-payload-encryptor?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/api-payload-encryptor?style=flat-square)](https://github.com/smit-backend/api-payload-encryptor/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/api-payload-encryptor?style=flat-square)](https://github.com/smit-backend/api-payload-encryptor/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **Transparent field-level encryption for database columns and API payloads utilizing AES-256-GCM envelope encryption and KMS integration.**

---

## 🚀 Key Architectural Highlights

- **Production Resilience:** Engineered with decoupled interfaces, structured exception trees, and strict typings.
- **High Concurrency Ready:** Built to eliminate latency bottlenecks, memory spikes, and race conditions.
- **Enterprise Standards:** Zero-dependency core logic with clean service provider adapters.
- **Full Observability:** Embedded metrics telemetry and structured contextual logging.

---

## 🛠️ Architecture & Lifecycle Workflow

```mermaid
graph TD
    Client[Incoming Event / API Trigger] --> Gate[Input Validation & Policy Guard]
    Gate --> CoreEngine[FieldCrypto: Envelope Encryption for PII Data]
    CoreEngine --> Adapter[External Storage / Cluster / State Provider]
    CoreEngine --> Observer[Telemetry & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2` or later
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/api-payload-encryptor
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="api-payload-encryptor-config"
```

Sample configuration excerpt (`config/api-payload-encryptor.php`):
```php
return [
    'enabled' => env('API_PAYLOAD_ENCRYPTOR_ENABLED', true),
    'timeout' => env('API_PAYLOAD_ENCRYPTOR_TIMEOUT', 30),
    'log_channel' => env('API_PAYLOAD_ENCRYPTOR_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
