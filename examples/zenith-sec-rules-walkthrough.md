# Zenith Sec Rules Index Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 123 | watch |
| stress | claim drift | 219 | ship |
| edge | replay exposure | 136 | watch |
| recovery | policy width | 183 | ship |
| stale | trust boundary | 240 | ship |

Start with `stale` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

If `baseline` becomes less cautious without a clear reason, I would inspect the drag input first.
