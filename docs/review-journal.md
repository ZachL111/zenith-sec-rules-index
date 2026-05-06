# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 123, lane `watch`
- `stress`: `claim drift`, score 219, lane `ship`
- `edge`: `replay exposure`, score 136, lane `watch`
- `recovery`: `policy width`, score 183, lane `ship`
- `stale`: `trust boundary`, score 240, lane `ship`

## Note

A future change should add new cases before it changes the scoring rule.
