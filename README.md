# concert-php2shell-webshop

Demo repo for an IBM Concert vulnerability-management demo. **Vulnerable on purpose. Do not deploy outside a demo cluster.**

- `Dockerfile` and `k8s/deployment.yaml` use `php:8.3.10-fpm-alpine`, affected by PHP2Shell (CVE-2026-109618, CVE-2026-109619).
- The fix is a one-line image bump to `php:8.3.36-fpm-alpine` in both files.
- `.github/workflows/grype.yml` builds the image, scans it with Grype, uploads a CycloneDX SBOM as an artifact, and fails the build on critical CVEs. On this vulnerable version the gate fails, which is the point.

## Demo flow

1. Connect this repo to IBM Concert (GitHub integration).
2. Show the PHP2Shell finding tied to the repo and the running webshop.
3. Fix: bump the image tag in `Dockerfile` and `k8s/deployment.yaml` (for example with IBM Bob), push, and watch the Grype gate go green.
